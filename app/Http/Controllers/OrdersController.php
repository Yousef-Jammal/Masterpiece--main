<?php

namespace App\Http\Controllers;

use App\Models\DiscountCode;
use App\Models\Order;
use App\Http\Requests\StoreordersRequest;
use App\Http\Requests\UpdateordersRequest;
use App\Models\CartItem;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkout($userID)
    {


        $totalPrice = 0;
        $cartItems = CartItem::where('user_id', $userID)->get();

        foreach($cartItems as $cartItem)
        {
            $totalPrice += $cartItem->product->price * $cartItem->quantity ;
        }

        return view('user.apps-ecommerce-checkout', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function processCheckout(Request $request)
    {
        $name = $request->input('NameInput');
        $phone = $request->input('phoneNumberInput');
        $altPhone = $request->input('alternativeNumberInput');
        $streetAddress = $request->input('streetAddressInput');
        $city = $request->input('townCityInput');
        $zipcode = $request->input('zipcodeInput');

        $deliveryOption = $request->input('deliveryChoose');

        $cardNumber = $request->input('cardNumberInput');
        $expiring = $request->input('expiringInput');
        $cvv = $request->input('cvvInput');

        $data = [
            $name,
            $phone,
            $altPhone,
            $streetAddress,
            $city,
            $zipcode,
            $deliveryOption,
            $cardNumber,
            $expiring,
            $cvv,
        ];

        return response()->json([
            'data' => $data,
            'message' => 'Checkout process completed successfully'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    protected $deliveryPrice = [
        'express-delivery' => 12,
        'air-logistic-delivery' => 5,
        'free-delivery' => 0,
    ];

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $totalPrice = 0;

        $discountCode = $request->discountCode;



        $totalPrice += $this->deliveryPrice[$request->deliveryChoose];


        $discount = DiscountCode::where('code', $discountCode)->first();

        // Create payment information
        $paymentInfo = Payment::create([
            'card_number'=> $request->cardNumber,
            'expiring'=> $request->Exiring,
            'CVV'=> $request->CVV,
            'user_id'=> auth()->user()->id,
        ]);

        // Create order
        $order = Order::create([
            'user_id' => $request->user_id,
            'product_id' => null, // Set to null or handle as needed
            'price' => 0,
            'phone_number' => $request->phone,
            'alternative_number' => $request->alternativeName,
            'street_address' => $request->street,
            'city' => $request->city,
            'country' => 'Jordan',
            'zip_code' => $request->zipCode,
            'delivery' => $request->deliveryChoose,
            'payments_information_id' => $paymentInfo->id,
        ]);


        // Retrieve cart items with eager loading
        $cartItems = CartItem::where('user_id', auth()->user()->id)
                            ->select('product_code', 'product_id', 'quantity', 'color', 'size', 'id')
                            ->with('product')
                            ->get();

        foreach ($cartItems as $cartItem) {

            $orderItem =   OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);

            $totalPrice += $cartItem->product->price * $cartItem->quantity ;

            // dd($cartItem->product->price);

            $cartItem = CartItem::find($cartItem->id);
            if ($cartItem && $orderItem) {
                $cartItem->delete();
            }
        }



        if ($discount && $discount->isValid()) {
            if($discount->discount_amount){
                $totalPrice -= $discount->discount_amount;
            }elseif($discount->discount_amount){
                $totalPrice /= $discount->discount_amount;
            }
        }


        Order::where('id', $order->id)->update([
            'price' => $totalPrice,
            'discount_code' => $discountCode ?? null,
            'delivery' => $request->deliveryChoose ?? null,
        ]);


        return redirect()->route('invoice' , $order->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($orderId)
    {
        $order = Order::find($orderId);

        $discount = DiscountCode::where('code', $order->discount_code )->first();

        $deliveryPrice = $this->deliveryPrice[$order->delivery];





        return view('user.apps-invoice-overview', [
            'order' => $order,
            'discounts' => $discount,
            'deliveryPrice' => $deliveryPrice,
        ]);
    }

    public function show_for_profile($orderId)
    {
        $order = Order::find($orderId);

        $discount = DiscountCode::where('code', $order->discount_code )->first();

        $deliveryPrice = $this->deliveryPrice[$order->delivery];





        return view('user.ajax.ajax_showInvoice', [
            'order' => $order,
            'discounts' => $discount,
            'deliveryPrice' => $deliveryPrice,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateordersRequest $request, Order $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $orders)
    {
        //
    }
}

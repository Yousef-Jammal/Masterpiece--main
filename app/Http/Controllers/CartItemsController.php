<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\DiscountCode;
use App\Http\Requests\Storecart_itemsRequest;
use App\Http\Requests\Updatecart_itemsRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userCart($userID)
    {
        // $cartItems = CartItem::where('user_id', $userID)->get();

        $cartItems = CartItem::where('user_id', $userID)
                        ->groupBy('product_code')
                        ->select('*')
                        ->get();



        $totalPrice = $cartItems->map(function ($cartItem) {
            $product = Product::where('code', $cartItem->product_code )->first();
            return $product->price ;

        })->sum();

        return view('user.apps-ecommerce-cart', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addCart(Request $request)
    {

        $cartItem = CartItem::where('user_id', $request->user_id)
                            ->where('product_code', $request->product_code)
                            ->first();

        if ($cartItem) {
            return response()->json([
                'success' => false,
                'message' => 'You have already this in your cart!',
            ]);
        } else {
            foreach ( explode(',', $request->product_ids) as $productId) {
                CartItem::create([
                    'user_id' => $request->user_id,
                    'product_id' => $productId,
                    'color' => $request->product_color == false ? null : $request->product_color,
                    'size' => $request->product_size == false ? null : $request->product_size,
                    'quantity' => $request->quantity ?? 1,
                    'product_code' => $request->product_code ?? null,
                ]);
            }
        }

        // $cartItemCount = CartItem::where('user_id', auth()->user()->id)->count();
        $cartItemCount = CartItem::select('product_code', DB::raw('COUNT(*) as count'))
                            ->where('user_id', auth()->user()->id)
                            ->groupBy('product_code')
                            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cartItemCount' => $cartItemCount,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cart_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cart_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecart_itemsRequest $request, CartItem $cart_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the record by ID and delete it
        $record = CartItem::find($id); // Replace YourModel with the actual model name
        if ($record) {
            $record->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Record not found'], 404);
    }

    public function deleteAll(Request $request)
    {
        $userId = $request->user_id;

        CartItem::where('user_id', $userId)->delete();

        return response()->json(['message' => 'All items deleted successfully.']);
    }

}

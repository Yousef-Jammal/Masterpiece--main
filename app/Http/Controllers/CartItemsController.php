<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\DiscountCode;
use App\Http\Requests\Storecart_itemsRequest;
use App\Http\Requests\Updatecart_itemsRequest;
use Illuminate\Http\Request;

class CartItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userCart($userID)
    {
        $cartItems = CartItem::where('user_id', 2)->get();

        $totalPrice = $cartItems->map(function ($cartItem) {
            return $cartItem->product->price ; // Assuming you have a quantity field
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

    // $request->validate([
    //     'user_id' => 'required|exists:users,id',
    //     'product_id' => 'required|exists:products,id',
    // ]);


    $cartItem = CartItem::where('user_id', $request->user_id)
                        ->where('product_id', $request->product_id)
                        ->first();

    if ($cartItem) {
        return response()->json([
            'success' => true,
            'message' => 'You have added it to cart!',
        ]);
    } else {
        CartItem::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
        ]);
    }

    return response()->json([
        'success' => true,
        'message' => 'Product added to cart successfully!',
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

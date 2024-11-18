<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Requests\StorewishlistsRequest;
use App\Http\Requests\UpdatewishlistsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function toggleFavorite(Request $request)
    {
        $productId = $request->input('product_id');
        $action = $request->input('action');
        $userId = auth()->id();

        if ($action === 'add') {

            Wishlist::create([
                'user_id' => $userId,
                'product_id' => $productId
            ]);

        } else {

            Wishlist::where([
                'user_id' => $userId,
                'product_id' => $productId
            ])->delete();
            
        }

        return response()->json(['success' => true]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewishlistsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($userID)
    {
        $wishlists = Wishlist::where('user_id', $userID)->get();
        return view('user.apps-ecommerce-wishList', [
            'wishlists' => $wishlists,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewishlistsRequest $request, Wishlist $wishlists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the record by ID and delete it
        $record = Wishlist::find($id); // Replace YourModel with the actual model name
        if ($record) {
            $record->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Record not found'], 404);
    }

    public function deleteAll(Request $request)
    {
        $userId = $request->user_id;

        Wishlist::where('user_id', $userId)->delete();

        return response()->json(['message' => 'All items deleted successfully.']);
    }
}

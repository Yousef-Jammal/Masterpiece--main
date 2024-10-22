<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\StorereviewsRequest;
use App\Http\Requests\UpdatereviewsRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::select('code', DB::raw('GROUP_CONCAT(id) as ids'))
                   ->groupBy('code')
                   ->get();

        $productArray = $products->map(function ($product) {
            return [
                'code' => $product->code,
                'ids' => explode(',', $product->ids) // Convert the comma-separated string to an array
            ];
        })->toArray();

        $users = User::all();

        $reviews = Review::select('reviews.*', 'products.code')
                            ->join('products', 'reviews.product_id', '=', 'products.id') // Join reviews with products
                            ->groupBy('products.code', 'reviews.user_id', 'reviews.rating', 'reviews.review') // Group by product code, user_id, rating, and comment
                            ->get();


        return view('admin.apps_reviews', ['reviews' => $reviews, 'users' => $users, 'products' => $productArray]);
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
    public function store(Request $request)
    {

        $productIDs = explode(',', $request->productIDs); // Convert the string to an array

        foreach ($productIDs as $productID) {
            Review::create([
                'user_id' => $request->userID, // Storing the user ID
                'review' => $request->comment, // Storing the comment
                'rating' => $request->rate, // Storing the rating
                'product_id' => trim($productID), // Storing each product ID after trimming any whitespace
            ]);
        }


        // if(isUser??)
        return redirect()->route('amdin_reviews')->with('success', 'Review added successfully!');
        // return redirect()->route('reviews_index')->with('success', 'Review added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Review $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereviewsRequest $request, Review $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $reviews)
    {
        //
    }
}

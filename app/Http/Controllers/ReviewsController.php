<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\StorereviewsRequest;
use App\Http\Requests\UpdatereviewsRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::select('code', DB::raw('GROUP_CONCAT(id) as ids'), 'title')
                   ->groupBy('code')
                   ->get();

        $productArray = $products->map(function ($product) {
            return [
                'title' => $product->title,
                'code' => $product->code,
                'ids' => explode(',', $product->ids) // Convert the comma-separated string to an array
            ];
        })->toArray();

        $users = User::all();
        // return $productArray;

        $reviews = Review::select('reviews.*', 'products.code')
                            ->join('products', 'reviews.product_id', '=', 'products.id') // Join reviews with products
                            ->groupBy('products.code', 'reviews.user_id', 'reviews.rating', 'reviews.review') // Group by product code, user_id, rating, and comment
                            ->get();

        if(Auth::user() && Auth::user()->role_id != 1 )
        {
            $arr = [];
            foreach (Auth::user()->store->products as $product) {
                $arr[] = $product->id;
            }
            // $reviews = Review::whereIn('product_id', $arr)->get();
            $reviews = Review::whereIn('product_id', $arr)
    ->groupBy('created_at', 'updated_at', 'rating', 'review', 'user_id', 'product_id')
    ->get();
        }


        return view('admin.tables.review', ['reviews' => $reviews, 'users' => $users, 'products' => $productArray]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddReview(Request $request)
    {

        $productIDs = explode(',', $request->product_ids);


        foreach ($productIDs as $productID) {

            $productID = trim($productID);
            if (!is_numeric($productID)) {
                continue;
            }

            // Create a review for each product ID
            Review::create([
                'user_id' => $request->user_id,
                'product_id' => $productID,
                'rating' => $request->rating,
                'review' => $request->comment,
            ]);
        }
        // $reviews = Review::with('user')->get();
        $reviews = Review::with('user')
            ->join('products', 'reviews.product_id', '=', 'products.id')
            ->select('products.code', 'reviews.user_id', 'reviews.rating', 'reviews.review')
            ->groupBy('products.code', 'reviews.user_id', 'reviews.rating', 'reviews.review')
            ->get();

        return response()->json([
            'status' => '200',
            'message' => 'success',
            'reviews' => $reviews,
        ],
         200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productIDs = json_decode($request->product_ids, true);

        foreach ($productIDs as $productID) {
            Review::create([
                'user_id' => $request->user_id, // Storing the user ID
                'product_id' => trim($productID), // Storing each product ID after trimming any whitespace
                'rating' => $request->rate, // Storing the rating
                'review' => $request->comment, // Storing the comment
            ]);
        }

        return redirect()->route('amdin_reviews')->with('success', 'Review added successfully!');

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
    public function update(Request $request, Review $reviews)
    {
        $productIDs = json_decode($request->product_ids, true);
        $review = Review::find($request->this_id);



        foreach ($productIDs as $productID) {
            $review->update([
                'user_id' => $request->user_id, // Storing the user ID
                'product_id' => trim($productID), // Storing each product ID after trimming any whitespace
                'rating' => $request->rate, // Storing the rating
                'review' => $request->comment, // Storing the comment
            ]);
            // Review::updated([
            //     'user_id' => $request->user_id, // Storing the user ID
            //     'product_id' => trim($productID), // Storing each product ID after trimming any whitespace
            //     'rating' => $request->rate, // Storing the rating
            //     'review' => $request->comment, // Storing the comment
            // ]);
        }

        return redirect()->route('amdin_reviews')->with('success', 'Review added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $reviews)
    {
        //
    }public function delete(Request $request)
    {
        // Find the review by its ID
        $review = Review::find($request->this_id);

        // Check if the review exists
        if ($review) {
            // Delete the review
            $review->delete();
            // Redirect back with success message
            return redirect()->route('amdin_reviews')->with('success', 'Review deleted successfully!');
        } else {
            // Redirect back with error message if review not found
            return redirect()->route('amdin_reviews')->with('error', 'Review not found!');
        }
    }
}

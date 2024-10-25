<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\Store;
use App\Models\Review;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function show_shop(){
        // $products = Product::paginate(8);
        $products = Product::select('*')
                            ->groupBy('code')
                            ->paginate(8);

        $number_of_products = Product::distinct('id')->count('id');
        $categories = Category::all();

        return view('user.apps-ecommerce-product-grid', ['products' => $products, 'number_of_products' => $number_of_products, 'categories'=>$categories]);
    }


    public function dashboard()
    {
        // $products = Product::all();
        $products = Product::paginate(6);

        $number_of_products = Product::distinct('id')->count('id');
        // $number_of_products = Product::distinct('code')->count('id');


        return view('admin.apps-ecommerce-product-list', ['products' => $products, 'number_of_products' => $number_of_products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories = Category::all();
        return view('admin.apps-ecommerce-product-create', ['categories' => $Categories]);
    }

    public function store(Request $request)
    {
        $store_id = Store::where('user_id',  $request->user_id)->pluck('id')->first();
        function better_uniqid($length = 12) {
            $data = openssl_random_pseudo_bytes(ceil($length / 2));
            return bin2hex($data);
        }

        $product_code = 'TWT-' . better_uniqid(8);

        $index = 1; // Starting index
        while ($request->has("qualityInput{$index}")) {
            $quantity = $request->input("qualityInput{$index}");
            $color = $request->input("selectColor{$index}");
            $size = $request->input("selectSize{$index}");

            $data = [
                'code' => $product_code,
                'title' => $request->title,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'status' => $request->status,
                'color' => $color,
                'size' => $size,
                'gender' => $request->gender,
                'quantity' => $quantity,
                'description' => $request->description,
                'store_id' => $store_id
            ];

            Product::create($data);

            $index++;
        }

        $product_id_for_image = Product::where('code', $product_code)->pluck('id')->first();

        $filenames = []; // Array to store filenames

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Get the original filename
                $filename = $file->getClientOriginalName();


                $file->move(public_path('images\product'), $filename);
                $filenames[] = $filename;
            }
        }

        // Insert image data into the database if there are filenames
        if (!empty($filenames)) {
            foreach ($filenames as $filename) {
                // Prepare the image data for database insertion
                $imagesData = [
                    'name' => $filename, // Just the filename, no path
                    'product_id' => $product_id_for_image,
                ];

                // Save the image data to the database
                ProductImage::create($imagesData);
            }
        }


        // return response()->json(['filenames' => $filenames, 'request' => $request->all()]);
        return redirect()->route('amdin_products');
    }


    /**
     * Display the specified resource.
     */
    public function show($code)
    {



        $product = Product::with('store.user')
            ->select(
                DB::raw('GROUP_CONCAT(id) as ids'),
                'code',
                'title',
                'price',
                'status',
                'gender',
                'description',
                'quantity',
                'store_id',
                DB::raw('GROUP_CONCAT(DISTINCT color ORDER BY color) as colors'),
                DB::raw('GROUP_CONCAT(DISTINCT size ORDER BY FIELD(size, "XS", "S", "M", "L", "XL", "XXL", "3XL")) as sizes')
            )
                ->where('code', $code)
                ->groupBy('code', 'title', 'price', 'status', 'gender', 'description', 'quantity')
                ->first();

        $productObj = (object) [
            'code' => $product->code,
            'ids' => explode(',', $product->ids),
            'title' => $product->title,
            'price' => $product->price,
            'status' => $product->status,
            'gender' => $product->gender,
            'description' => $product->description,
            'quantity' => $product->quantity,
            'colors' => explode(',', $product->colors),
            'sizes' => explode(',', $product->sizes),
            'store' => $product->store,
        ];

        // Get reviews for the product
        $reviews = Review::where('product_id', $productObj->ids[0])->get();

        // Get rating count and average rating
        $ratingCount = $reviews->count();
        $averageRating = $reviews->avg('rating');

        // Prepare ratings data
        $ratings = [];
        for ($i = 5; $i >= 1; $i--) {
            $count = $reviews->where('rating', $i)->count();
            $percentage = $ratingCount > 0 ? ($count / $ratingCount) * 100 : 0; // Calculate percentage
            $ratings[] = [
                'stars' => $i,
                'count' => $count,
                'percentage' => number_format($percentage, 2), // Format percentage
            ];
        }

        // Format average rating
        $currentAvRa = floor($averageRating) == $averageRating ? (int)$averageRating : number_format((float)$averageRating, 1, '.', '');


        return view('user.apps-ecommerce-product-overview', [
            'product' => $productObj,
            'reviews' => $reviews,
            'averageRating' => $currentAvRa,
            'ratingCount' => $ratingCount,
            'ratings' => $ratings, // Pass the ratings data to the view
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductsRequest $request, Product $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على المنتج باستخدام المعرف
        $product = Product::find($id);

        // التحقق مما إذا كان المنتج موجودًا
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // حذف المنتج
        $product->delete();

        // إعادة التوجيه مع رسالة نجاح
        // return redirect()->route('products.index')->with('success', 'Product deleted successfully');
        // return 'success';
        // return 'hui';

        return redirect()->route('amdin_products');
    }
}

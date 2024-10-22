<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class landingPage extends Controller
{
    public function show(){

        // $four_products = Product::distinct('code')->paginate(4);
        // $four_products = Product::select('*')
        // ->groupBy('code', 'id', 'name', 'price', 'created_at', ) // Include all columns here
        // ->take(4)
        // ->get();

        $four_products = Product::select('*')
    ->groupBy('code')
    ->paginate(4);




        return view('landing_pages.product-landing', ["four_products"=> $four_products]);
    }

}

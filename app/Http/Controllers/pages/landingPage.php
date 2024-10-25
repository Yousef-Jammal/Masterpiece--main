<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class landingPage extends Controller
{
    public function show()
    {
        $four_products = Product::select('*')
                                ->groupBy('code')
                                ->withAvg('reviews', 'rating')
                                ->paginate(4);

        return view('landing_pages.product-landing', ["four_products" => $four_products]);
    }


}

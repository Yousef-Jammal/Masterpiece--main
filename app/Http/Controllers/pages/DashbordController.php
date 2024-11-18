<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DiscountCode;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;

class DashbordController extends Controller
{
    public function index()
    {
        $ordersCount = Order::all()->count();
        $productsCount = Product::all()->count();
        $usersCount = User::all()->count();
        $storesCount = Store::all()->count();
        $CategoriesCount = Category::all()->count();
        $DiscountCodesCount = DiscountCode::all()->count();
        // return $storesCount;
        return view('admin.index', [
            'ordersCount' => $ordersCount,
            'productsCount' => $productsCount,
            'usersCount' => $usersCount,
            'storesCount' => $storesCount,
            'CategoriesCount' => $CategoriesCount,
            'DiscountCodesCount' => $DiscountCodesCount,
        ]);
    }
}

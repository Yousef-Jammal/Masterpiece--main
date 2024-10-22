<?php

namespace App\Http\Controllers\Pages\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FilterController extends Controller
{
    public function ajax_search_products_by_title(Request $request)
    {
        if($request->ajax()){
            $searchProducts = $request->searchProducts;

            if($searchProducts != ''){

                $products = Product::select('*')
                ->where('title', 'like', "%$searchProducts%")
                ->groupBy('code')
                ->orderBy('id', 'ASC')
                ->paginate(8);


                // $products = Product::paginate(1);
            }else{
                $products = Product::select('*')
                ->groupBy('code')
                ->paginate(8);
            }


            $number_of_products = Product::distinct('id')->count('id');

            return view('user.ajax.ajax_search' , ['products' => $products, 'number_of_products' => $number_of_products]);

            // return view('user.apps-ecommerce-product-grid', ['products' => $products, 'number_of_products' => $number_of_products]);

        }
    }


    public function ajax_search_products_by_colors(Request $request)
    {
        if($request->ajax()){

            $colors = $request->colorFilters; // جلب فلاتر الفئات من الطلب
            $productsQuery = Product::select('*')
                ->groupBy('code') // تجميع المنتجات حسب الكود
                ->orderBy('id', 'ASC'); // ترتيب النتائج

            // التحقق إذا كانت فلاتر الفئات موجودة
            if (!empty($colors)) {
                // استخدام whereIn بدلاً من orWhere مع foreach
                $productsQuery = $productsQuery->whereIn('color', $colors);
            }

            // حساب العدد الفعلي للمنتجات
            // $number_of_products = $productsQuery->count();
            $number_of_products = '2';

            // تنفيذ الاستعلام مع التصفية والصفحات
            $products = $productsQuery->paginate(8);

            // إرجاع النتائج إلى العرض (view)
            return view('user.ajax.ajax_search', [
                'products' => $products,
                'number_of_products' => $number_of_products
            ]);
        }
    }



    public function ajax_search_products_by_price(Request $request)
    {
        if($request->ajax()){

            $priceFilters = $request->priceFilters; // جلب فلاتر السعر من الطلب
            $products = Product::select('*')
                ->groupBy('code') // تجميع المنتجات حسب الكود
                ->orderBy('id', 'ASC'); // ترتيب النتائج

            // التحقق إذا كانت فلاتر السعر موجودة
            if (!empty($priceFilters)) {
                $products = $products->where(function ($query) use ($priceFilters) {
                    foreach ($priceFilters as $filter) {
                        if (strpos($filter, '+') !== false) {
                            // إذا كان النطاق يحتوي على علامة +
                            $minPrice = (int) str_replace('+', '', $filter);
                            $query->orWhere('price', '>=', $minPrice); // فلترة بالحد الأدنى فقط
                        } else {
                            // التعامل مع النطاقات التي تحتوي على حد أدنى وحد أقصى
                            [$minPrice, $maxPrice] = explode('-', $filter);
                            $query->orWhereBetween('price', [(int)$minPrice, (int)$maxPrice]);
                        }
                    }
                });
            }

            // تنفيذ الاستعلام مع التصفية والصفحات
            $products = $products->paginate(8);

            // $number_of_products = $products->count();
            $number_of_products = '2';


            // $number_of_products = 3;

            return view('user.ajax.ajax_search' , ['products' => $products, 'number_of_products' => $number_of_products]);

        }
    }

    // ajax_search_products_by_categories

    public function ajax_search_products_by_categories(Request $request)
    {
        if($request->ajax()){

            $categoriesFilters = $request->categoriesFilters; // جلب فلاتر الفئات من الطلب
            $productsQuery = Product::select('*')
                ->groupBy('code') // تجميع المنتجات حسب الكود
                ->orderBy('id', 'ASC'); // ترتيب النتائج

            // التحقق إذا كانت فلاتر الفئات موجودة
            if (!empty($categoriesFilters)) {
                // استخدام whereIn بدلاً من orWhere مع foreach
                $productsQuery = $productsQuery->whereIn('category_id', $categoriesFilters);
            }

            // حساب العدد الفعلي للمنتجات
            // $number_of_products = $productsQuery->count();
            $number_of_products = '2';

            // تنفيذ الاستعلام مع التصفية والصفحات
            $products = $productsQuery->paginate(8);

            // إرجاع النتائج إلى العرض (view)
            return view('user.ajax.ajax_search', [
                'products' => $products,
                'number_of_products' => $number_of_products
            ]);
        }
    }

}

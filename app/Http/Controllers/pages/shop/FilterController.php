<?php

namespace App\Http\Controllers\Pages\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class FilterController extends Controller
{
    public function ajax_search_products(Request $request)
{
    if ($request->ajax()) {
        // الحصول على المدخلات من الـ AJAX
        $searchProducts = $request->searchProducts;
        $colors = $request->colorFilters ?? [];
        $priceFilters = $request->priceFilters ?? [];
        $categoriesFilters = $request->categoriesFilters ?? [];

        // إنشاء استعلام المنتجات
        $productsQuery = Product::select('*')
            ->groupBy('code')
            ->orderBy('id', 'ASC');

        // تطبيق فلتر البحث بالعنوان
        if (!empty($searchProducts)) {
            $productsQuery->where('title', 'like', "%$searchProducts%");
        }

        // تطبيق فلتر الألوان
        if (!empty($colors)) {
            $productsQuery->whereIn('color', $colors);
        }

        // تطبيق فلتر الأسعار
        if (!empty($priceFilters)) {
            $productsQuery->where(function ($query) use ($priceFilters) {
                foreach ($priceFilters as $filter) {
                    if (strpos($filter, '+') !== false) {
                        $minPrice = (int) str_replace('+', '', $filter);
                        $query->orWhere('price', '>=', $minPrice);
                    } else {
                        [$minPrice, $maxPrice] = explode('-', $filter);
                        $query->orWhereBetween('price', [(int)$minPrice, (int)$maxPrice]);
                    }
                }
            });
        }

        // تطبيق فلتر الفئات
        if (!empty($categoriesFilters)) {
            $productsQuery->whereIn('category_id', $categoriesFilters);
        }

        // جلب النتائج مع التصفية
        $products = $productsQuery->paginate(8);
        $number_of_products = $products->total(); // لحساب العدد الفعلي للمنتجات

        // إعادة النتائج إلى الـ View
        return view('user.ajax.ajax_search', [
            'products' => $products,
            'number_of_products' => $number_of_products
        ]);
    }
}

}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('user.master', function ($view) {
            $cartItemCount = 0;

            if (Auth::check()) {
                // $cartItemCount = CartItem::where('user_id', auth()->user()->id)->count();
                // $cartItemsCount = CartItem::select(DB::raw('COUNT(*) as count'))
                //                     ->where('user_id', auth()->user()->id)
                //                     ->groupBy('product_code')
                //                     ->get();
                $cartItemCount = CartItem::where('user_id', auth()->user()->id)
                                    ->groupBy('product_id')
                                    ->count();
                // $cartItemCount = $cartItemsCount;
            }

            $view->with('cartItemCount', $cartItemCount);
        });
    }

}

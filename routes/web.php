<?php

use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartItemsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRevenueController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WishlistsController;
use App\Http\Controllers\authController;
use App\Http\Controllers\DiscountCodeController;

use App\Http\Controllers\pages\landingPage;

use App\Http\Controllers\Pages\Shop\FilterController;
use App\Models\CartItem;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin_main');

    Route::get('/products_dashboard', [ProductsController::class, 'dashboard'])->name('amdin_products');
    Route::get('/product_view', [ProductsController::class, 'dashboard'])->name('amdin_products');

    Route::get('product_create', [ProductsController::class, 'create'])->name('amdin_products_create');
    Route::post('product_create', [ProductsController::class, 'store'])->name('product_create');

    Route::get('users', [UsersController::class, 'index'])->name('amdin_users');
    Route::post('add-user', [UsersController::class, 'store'])->name('amdin_users_add');


    Route::get('reviews', [ReviewsController::class, 'index'])->name('amdin_reviews');

});


Route::post('reviews', [ReviewsController::class, 'store'])->name('reviews_create');
Route::get('stores', [StoresController::class, 'index'])->name('stores');
Route::post('stores', [StoresController::class, 'store'])->name('store_create');

Route::prefix('products')->group(function () {

    Route::get('/product/{code}', action: [ProductsController::class, 'show'])->name('product_show');
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('delete_product');


    Route::get('/shop/filter', [FilterController::class, 'index'])->name('shop.filter');


    Route::post('/ajax_search_title', [FilterController::class, 'ajax_search_products_by_title'])->name('ajax_search_products_by_title');
    Route::post('/ajax_search_colors', [FilterController::class, 'ajax_search_products_by_colors'])->name('ajax_search_products_by_colors');
    Route::post('/ajax_search_price', [FilterController::class, 'ajax_search_products_by_price'])->name('ajax_search_products_by_price');
    Route::post('/ajax_search_categories', [FilterController::class, 'ajax_search_products_by_categories'])->name('ajax_search_products_by_categories');

});
// Route::post('/products/{id}', [ProductsController::class, 'destroy'])->name('ajax_delete_product');


Route::prefix( 'auth')->group(function () {
    Route::get('register', [authController::class, 'showRegisterForm'])->name('show_register');
    Route::get('login', [authController::class, 'showLoginForm'])->name('show_login');

    Route::post('register', [authController::class, 'register'])->name('register');
    Route::post('login', [authController::class, 'login'])->name('login');

    Route::get('/logout', [authController::class, 'logout'])->name('logout');


});




Route::get('checkUser', function(){
    if (auth()->check()) {
        // User is logged in
        $user = auth()->user();
        return $user;
        ;
    } else {
          return 'no';
        // User is not logged in
      }
});

Route::prefix( 'user')->group(function () {
    Route::get('landingPage', [landingPage::class, 'show'])->name('show_landingPage');
    Route::get('shop',  [ProductsController::class, 'show_shop'])->name('show_products');
    Route::get('userCart/{userID}',  [CartItemsController::class, 'userCart'])->name('userCart');
});

// for check the code discount
Route::post('/check-discount-code', [DiscountCodeController::class, 'checkCode'])->name('discount_check');
Route::post('/add-cartItme', [CartItemsController::class, 'addCart'])->name('cart_add');


// start auth



Route::get('/logout', function () {
    return view('auth.auth-logout-basic');
})->name('show_logout');

Route::get('/createPassword', function () {
    return view('auth.auth-create-password-basic');
})->name('show_createPassword');

Route::get('/resetPassword', function () {
    return view('auth.auth-reset-password-basic');
})->name('show_resetPassword');

Route::get('/towSteps', function () {
    return view('auth.auth-two-steps-basic');
})->name('show_towSteps');

Route::get('/verifyEmail', function () {
    return view('auth.auth-verify-email-basic');
})->name('show_verifyEmail');

// end auth


Route::get('/shop', function () {
    return view('auth.auth-verify-email-basic');
})->name('shop');

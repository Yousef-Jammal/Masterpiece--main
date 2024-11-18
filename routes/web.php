<?php

use App\Http\Controllers\AdminProfileController;
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
use App\Http\Controllers\Pages\DashbordController;
use App\Http\Controllers\pages\landingPage;

use App\Http\Controllers\Pages\Shop\FilterController;
use App\Models\CartItem;
// use PharIo\Manifest\Email;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

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

// Route::middleware(['is_admin'])->group(function () {
// Route::prefix('admin')->group(function () {
Route::prefix('admin')->middleware(['is_admin'])->group(function () {

    Route::get('/', [DashbordController::class, 'index'])->name('admin_main');

    Route::resource('/products' , ProductsController::class);
    Route::resource('discount_codes', DiscountCodeController::class);
    Route::resource('categories', CategoriesController::class);


    Route::get('stores', [StoresController::class, 'index'])->name('stores');
    Route::post('stores', [StoresController::class, 'store'])->name('store_create');
    Route::put('stores', [StoresController::class, 'update'])->name('store_update');
    Route::delete('stores', [StoresController::class, 'destroy'])->name('store_delete');



    Route::get('users', [UsersController::class, 'index'])->name('amdin_users');
    Route::post('add-user', [UsersController::class, 'store'])->name('amdin_users_add');
    Route::put('updateUserInfo', [UsersController::class, 'updateUserInfo'])->name('updateUserInfo');
    Route::delete('deleteUser', [UsersController::class, 'deleteUser'])->name('deleteUser');


    Route::get('reviews', [ReviewsController::class, 'index'])->name('amdin_reviews');
    Route::post('admin/reviews', [ReviewsController::class, 'store'])->name('amdin_reviews_create');
    Route::put('admin/reviews', [ReviewsController::class, 'update'])->name('amdin_reviews_update');
    Route::delete('admin/reviews', [ReviewsController::class, 'delete'])->name('amdin_reviews_delete');

    // Admin Profile
    Route::get('amdin-profile', [AdminProfileController::class, 'index'])->name('amdin_profile');
    Route::put('amdin-profile-info/{id}', [AdminProfileController::class, 'update'])->name('amdin_profile_update');
    Route::put('amdin-profile-password', [AdminProfileController::class, 'changePassword'])->name('amdin_profile_changePass');
});

Route::get('/your-target-url', [OrdersController::class, 'store'])->name('yourSubmitRoute');
Route::get('/incvoce', [OrdersController::class, 'show']);



Route::post('/checkout', [OrdersController::class, 'processCheckout'])->name('checkout.process');
Route::post('reviews', [ReviewsController::class, 'store'])->name('reviews_create');


Route::prefix('products')->group(function () {

    Route::get('/product/{code}', action: [ProductsController::class, 'show'])->name('product_show');
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('delete_product');


    Route::get('/shop/filter', [FilterController::class, 'index'])->name('shop.filter');


    Route::post('/ajax_search_title', [FilterController::class, 'ajax_search_products'])->name('ajax_search_products');

});



// Auth
Route::get('auth/register', [authController::class, 'showRegisterForm'])->name('show_register');
Route::get('auth/login', [authController::class, 'showLoginForm'])->name('show_login');
Route::post('auth/register', [authController::class, 'register'])->name('register');
Route::post('auth/login', [authController::class, 'login'])->name('login');
Route::get('auth/logout', [authController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [authController::class, 'showForgotPasswordForm']);
// Route::get('sendEmail', function(){
//     // Mail::to('yousefalsaidh@gmail.com')->send(new SampleMail());
//     Mail::to('yousefalsaidh@gmail.com')->send(new SampleMail());
//     return 'Email send';
// });



// User Profile
Route::get('profile', [UsersController::class, 'show'])->name('profile');
Route::put('profile/{id}', [UsersController::class, 'update'])->name('user-update-info');
Route::post('/change-password', [UsersController::class, 'changePassword'])->name('user.changePassword');




// Pages
Route::get('user/landingPage', [landingPage::class, 'show'])->name('show_landingPage');
Route::get('user/shop',  [ProductsController::class, 'show_shop'])->name('show_products');
Route::get('user/userCart/{userID}',  [CartItemsController::class, 'userCart'])->name('userCart');
Route::get('user/userWishList/{userID}',  [WishlistsController::class, 'show'])->name('show_wishList');
Route::get('user/checkout/{userID}',  [OrdersController::class, 'checkout'])->name('checkout');
Route::get('user/invoice/{Id}',  [OrdersController::class, 'show'])->name('invoice');
Route::get('user/profile/invoice/{Id}',  [OrdersController::class, 'show_for_profile']);


Route::post('/AddReview', [ReviewsController::class, 'AddReview'])->name('AddReview');

// for check the code discount
Route::post('/check-discount-code', [DiscountCodeController::class, 'checkCode'])->name('discount_check');
Route::post('/add-cartItme', [CartItemsController::class, 'addCart'])->name('cart_add');
Route::post('/toggle_favorite', [WishlistsController::class, 'toggleFavorite'])->name('toggle_favorite');

Route::put('/cart/item/{id}/change', [CartItemsController::class, 'changeQuantity'])->name('change_cartItem_quantity');

// Route::put('/change_cartItem_quantity/{id}', [CartItemsController::class, 'update'])->name('change_cartItem_quantity');

Route::delete('/delete_cartItem/{id}', [CartItemsController::class, 'destroy'])->name('delete_cartItem');
Route::delete('/delete_AllCartItem', [CartItemsController::class, 'deleteAll'])->name('delete_AllCartItem');

Route::delete('/delete_wishlist/{id}', [WishlistsController::class, 'destroy'])->name('delete_wishlist');
Route::delete('/delete_Allwishlist', [WishlistsController::class, 'deleteAll'])->name('delete_Allwishlist');

// start authW








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



Route::get('checkUser', function(){
    // return config('session.lifetime');
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

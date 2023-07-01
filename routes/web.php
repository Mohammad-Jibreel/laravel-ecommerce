<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Admin\BillerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WishlistController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\UserController as User;
use App\Http\Controllers\User\ProductController as product;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
     Route::get('/', [AdminController::class,'index'])->name('admin');
        Route::resource('color', ColorController::class);
        Route::resource('size', SizeController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('subCategory', SubcategoryController::class);
        Route::resource('product', ProductController::class);
        Route::resource('payment', PaymentController::class);
        Route::resource('rating', RatingController::class);
        Route::resource('biller', BillerController::class);
        Route::resource('user', UserController::class);
        Route::resource('wishlist', WishlistController::class);
        Route::resource('order', OrderController::class);

});

Route::get('/', [User::class,'index'])->name('user.home');

// User Routes
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('checkout', [CheckOutController::class,'index'])->name('checkout');
    Route::get('contact', [ContactController::class,'index'])->name('contact');
    Route::get('privacy', [ContactController::class,'privacy']);
    Route::get('product', [product::class,'index'])->name('product');
    Route::get('shop', [User::class,'shop'])->name('shop');



});



Auth::routes();



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\BillerController;
use App\Http\Controllers\UserController;


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


Route::get('/Cus', function () {
    return view('Customer.index');
});
Route::get('/admin', function () {
    return view('Admin.index');
});


Route::prefix('customer')->group(function () {

Route::get('/contact', function () {
return view('Customer.Home.Contact');
});

Route::get('/privacy', function () {
    return view('Customer.Home.Privacy');

});

Route::get('/checkout', function () {
    return view('Customer.Checkout.Index');
    });


});



Route::prefix('admin')->group(function () {

    Route::resource('color', ColorController::class);
    Route::resource('size', SizeController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('subCategory', SubcategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('payment', OrderController::class);
    Route::resource('rating', RatingController::class);
    Route::resource('biller', BillerController::class);
    Route::resource('user', UserController::class);

});



Auth::routes();



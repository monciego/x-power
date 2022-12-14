<?php

use App\Http\Controllers\AdminTrackOrderController;
use App\Http\Controllers\AdminTrackServiceTransactionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceHistoryController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Login route
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


// ** Route for both (admin and user)
// Route::group(['middleware' => ['auth', 'verified']], function() {//- if need email verification
Route::group(['middleware' => ['auth']], function() {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


// Route for administrator
Route::group(['middleware' => ['auth', 'role:administrator']], function() {
    Route::resource('products', ProductController::class);
    Route::resource('product-categories', CategoryProductController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('service-categories', CategoryServiceController::class);
    Route::resource('track-orders', AdminTrackOrderController::class);
    Route::resource('service-transactions', AdminTrackServiceTransactionController::class);
    Route::resource('users',  UsersController::class);
});

// Route for user
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::resource('user-products', UserProductController::class);
    Route::get('/check-out/{product}', [OrderController::class, 'checkOut'])->name('checkout.index');
    Route::get('ordernow', [OrderController::class, 'orderNow']);
    Route::post("/order-all",[OrderController::class,'storeAll'])->name('order.all');
    Route::resource('order', OrderController::class);
    Route::resource('user-services', UserServiceController::class);
    Route::resource('service-history', ServiceHistoryController::class);
    Route::post("/add-to-cart",[CartController::class,'addToCart'])->name('addToCart');
    Route::resource('cart', CartController::class);
    Route::get('/avail-service/{service}', [ServiceHistoryController::class, 'availService'])->name('avail-service.index');
});

require __DIR__.'/auth.php';

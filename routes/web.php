<?php

use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
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
// Route::group(['middleware' => ['auth', 'verified']], function() - if need email verification
Route::group(['middleware' => ['auth']], function() {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


// Route for administrator
Route::group(['middleware' => ['auth', 'role:administrator']], function() {
    Route::resource('products', ProductController::class);
    Route::resource('product-categories', CategoryProductController::class);
    Route::resource('services', ServiceController::class);
});

// Route for user
Route::group(['middleware' => ['auth', 'role:user']], function() {

});

require __DIR__.'/auth.php';

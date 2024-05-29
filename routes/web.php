<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BestSellerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CollabController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/bestseller', [BestSellerController::class, 'index'])->name('bestseller');
Route::get('/collab', [CollabController::class, 'index'])->name('collab');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/sale', [SaleController::class, 'index'])->name('sale');

Route::middleware(['alreadyLoggedIn'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
    Route::get('/regist', [AuthController::class, 'registIndex'])->name('regist');
    Route::post('/regist', [AuthController::class, 'registerBuyer'])->name('regist.register');
    Route::post('/login', [AuthController::class, 'loginBuyer'])->name('login.loginBuyer');
});

Route::middleware(['isLoggedIn'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/user', [UserController::class, 'profileUser'])->name('user');
    Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('/addToCartSale', [CartController::class, 'addToCartSale'])->name('addToCartSale');
    Route::post('/addToCartCollab', [CartController::class, 'addToCartCollab'])->name('addToCartCollab');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::delete('/cart/{id}', [CartController::class, 'removeCart'])->name('removeCart');
    Route::post('/processCheckout', [CheckoutController::class, 'processCheckout'])->name('processCheckout');
    Route::get('/checkoutSuccess', function () {
        return view('done');
    })->name('done');
});


// Route::get('/', function () {
//     return view('test');
// });

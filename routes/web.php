<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*require __DIR__.'/auth.php';*/

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/account', [AuthenticationController::class, 'account'])->name('account');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/welcome', [AuthenticationController::class, 'welcome'])->name('welcome');


Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('/shop', [AdminController::class, 'shop'])->name('shop');
Route::get('/cart', [AdminController::class, 'cart'])->name('cart');
Route::post('/update-cart', [AdminController::class, 'updateCart'])->name('update-cart');
Route::get('/checkout', [AdminController::class, 'checkout'])->name('checkout');


Route::get('/add-product', [AdminController::class, 'addProduct'])->name('add-product');
Route::post('/upload-product', [AdminController::class, 'uploadProduct'])->name('upload-product');


Route::post('/add-to-cart', [AdminController::class, 'addToCart'])->name('add-to-cart');

/*view guest cart*/
Route::get('/view-guest-cart', [AdminController::class, 'viewGuestCart'])->name('view-guest-cart');
Route::get('/view-cart', [AdminController::class, 'viewCart'])->name('view-cart');
Route::get('/remove-from-cart', [AdminController::class, 'removeCart'])->name('remove-from-cart');


Route::get('/checkout', [AdminController::class, 'checkout'])->name('checkout');

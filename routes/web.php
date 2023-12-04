<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\FavoriteProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LockController;
use App\Http\Controllers\Auth\PasswordController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/customer/home', [HomeController::class, 'customerHome']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function (){

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/bag', [BagController::class, 'bag']);
    Route::get('/favorite_product', [FavoriteProductController::class, 'favorite_product']);
    Route::post('/add-bag-product', [ProductController::class, 'addBag']);
    Route::post('/add-favorite-product', [ProductController::class, 'addFavorite']);
    Route::post('/un-favorite-product', [ProductController::class, 'unFavorite']);
    Route::patch('/buy-product', [ProductController::class, 'Buy']);
    Route::post('/comment', [ProductController::class, 'Comment']);
    Route::get('/product', [ProductController::class, 'product']);
    Route::get('/detail-product', [ProductController::class, 'productDetail']);
    Route::get('/buy-product', [ProductController::class, 'buyProduct']);
    Route::post('/order', [ProductController::class, 'order'])->name('order');
    Route::get('/order-detail', [ProductController::class, 'orderDetail']);
    Route::put('update-password', [PasswordController::class, 'update'])->name('password.update');
});

require __DIR__ . '/auth.php';



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/home', [AdminController::class, 'home']);
    Route::get('/product', [AdminController::class, 'product'])->name('admin.product');
    Route::get('/product-add', [AdminController::class, 'productAdd']);
    Route::get('/customer', [AdminController::class, 'customer']);
    Route::patch('/productSave', [AdminController::class, 'save']);
    Route::post('/productEdit', [AdminController::class, 'edit']);
    Route::post('/productDelete', [AdminController::class, 'delete']);
    Route::patch('/productEditSave', [AdminController::class, 'editSave']);
    Route::post('/LockCustomer',[LockController::class, 'lock']);
    Route::post('/UnLockCustomer',[LockController::class, 'unlock']);
});

Route::get('/search',[SearchController::class, 'search'])->name('search');
Route::get('/amount',[ProductController::class, 'amount'])->name('search');

Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/wel', function (){
    return view('privacy');
});

Route::post('/sentChat', [ChatController::class, 'sentChat']);
Route::post('/resentChat', [ChatController::class, 'resentChat']);
Route::post('/find_product', [ProductController::class, 'findProduct']);

Route::get('/about', function (){
    return view('privacy');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/home-product', [ProductController::class, 'homeProduct']);
Route::get('/home-product-detail', [ProductController::class, 'homeProductDetail']);


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpKernel\Profiler\Profile;

Auth::routes();

// Frontend route
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/product/{id}', [ProductController::class, 'Quickshow'])->name('frontend.index');

Route::get('/', [ProductController::class, 'show'])->name('frontend.index');


// Admin login route
Route::get('/admin/login', function () {
    return view('admin.login');
});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes :

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin-dashboard', [AdminController::class, 'isAdmin'])->name('admin.dashboard');

    // Profile settings Routes

    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update']);


    // Category Routes 
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::put('/category/update/{id}', [CategoryController::class, 'update']);

    // Product Routes 
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
    Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
    Route::put('/product/update/{id}', [ProductController::class, 'update']);
});

// User login route
Route::get('/user/login', function () {
    return view('userauth.login');
});

// User Routes :

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/frontend', [UserController::class, 'isUser'])->name('frontend.index');
    Route::get('/frontend', [ProductController::class, 'show'])->name('frontend.index');

    // Cart Routes
    Route::get('/frontend/cart/', [CartController::class, 'index'])->name('frontend.cart.index');
    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/fronternd/cart/add/{id}', [CartController::class, 'add'])->name('frontend.cart.add');
});

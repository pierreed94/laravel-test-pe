<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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


//Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//login page
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store']);

//products category
Route::get('/shop', [ProductsController::class, 'index'])->name('category');
// array prices products
Route::get('/shop/prices', [ProductsController::class, 'listArray'])->name('product_price');
//single product
Route::get('/shop/{slug}', [ProductsController::class, 'show'])->name('product');
// ajax array list product
Route::post('/ajaxSort/product', [ProductsController::class, 'ajaxSortArray'])->name('ajaxSortArray');

//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/product/{id}', [CartController::class, 'add'])->name('add_cart');
Route::patch('/update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('/delete-cart-product', [CartController::class, 'delete'])->name('delete_cart');


//Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
//Contact form submit
Route::post('/formContact/new', [ContactController::class, 'store'])->name('new_formContact');

//admin

Route::prefix('admin')->controller(AdminController::class)->middleware('auth')->middleware('role')->group(function () {
    Route::get('/', 'index')->name('home_admin');
    Route::get('/products/details/{product}' ,'detailsProductAdmin')->name('details_admin_product');
    Route::get('/products/edit/{product}','edit')->name('edit');
    Route::post('/products/edit/{product}', 'update');
    Route::get('/products/create', 'create')->name('create');
    Route::post('/products/create', 'store');
    Route::delete('/products/delete/{product}', 'destroy')->name('delete_product');
});



<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//frontend routes
Route::get('/', [HomeController:: class, 'index']);
Route::get('/dashboard', [HomeController:: class, 'index']);
Route::get('/products', [HomeController:: class, 'menu']);
Route::get('/chitietsanpham/{product}', [HomeController:: class, 'detail']);
Route::get('/gallery', [HomeController:: class, 'gallery']);
Route::get('/news', [HomeController:: class, 'news']);
Route::get('/contacts', [HomeController:: class, 'contacts']);




//login routes
Route::get('/admin/login', [LoginController:: class, 'index'])->name('login');
Route::get('/admin/logout', [LoginController:: class, 'logout']);
Route::post('/admin/login/store', [LoginController:: class, 'store']);
Route::get('admin/home', [AdminController:: class, 'index']);


// news routes
Route::get('news/create', [NewsController:: class, 'create']);
Route::POST('news/create', [NewsController:: class, 'store']);
Route::get('news/show', [NewsController:: class, 'show']);
Route::get('news/{new}', [NewsController:: class, 'edit']);
Route::post('news/edit/{new}', [NewsController:: class, 'update']);
Route::post('news/delete/{new}', [NewsController:: class, 'destroy']);


// products routes
Route::get('products/create', [ProductsController:: class, 'create']);
Route::POST('products/create', [ProductsController:: class, 'store']);
Route::get('products/show', [ProductsController:: class, 'show']);
Route::get('products/{product}', [ProductsController:: class, 'edit']);
Route::post('products/edit/{product}', [ProductsController:: class, 'update']);
Route::post('products/delete/{product}', [ProductsController:: class, 'destroy']);


// contacts routes
Route::get('contacts/create', [ContactsController:: class, 'create']);
Route::post('contacts/create', [ContactsController:: class, 'store']);
Route::get('contacts/show', [ContactsController:: class, 'show']);
Route::get('contacts/{contact}', [ContactsController:: class, 'edit']);
Route::post('contacts/edit/{contact}', [ContactsController:: class, 'update']);
Route::post('contacts/delete/{contact}', [ContactsController:: class, 'destroy']);






<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Model;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop',[ProductController::class, 'index'])->name("shop");
Route::get('/About',[App\Http\Controllers\AboutController::class, 'index'])->name('About');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('Contact');








Route::get('/shop/add', [ProductController::class, 'create'])->name('add');
Route::post('/shop/store', [ProductController::class, 'store'])->name('store');
Route::get('/shop/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::patch('/shop/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/shop/delete/{id}', [ProductController::class, 'destroy'])->name('delete');


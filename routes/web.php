<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

// Route::get('/', function () {
//    return view('welcome');
// });


Route::get('/',[Admincontroller::class, 'index']);
Route::get('/dashboard',[Admincontroller::class, 'hello'])->name('dashboard');
Route::get('/banner',[Admincontroller::class, 'banner'])->name('banner');
Route::get('/product',[Admincontroller::class, 'product'])->name('product');
Route::get('/addbanner',[Admincontroller::class, 'addbanner'])->name('addbanner');

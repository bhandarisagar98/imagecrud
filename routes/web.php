<?php

use App\Http\Controllers\ImageController;
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

Route::get('/',[ImageController::class,'index'])->name('productshowpage');
Route::get('/create',[ImageController::class,'create'])->name('productcreatepage');
Route::get('/edit/{id}',[ImageController::class,'edit'])->name('producteditpage');
Route::post('/store',[ImageController::class,'store'])->name('storeproduct');
Route::post('/update/{id}',[ImageController::class,'update'])->name('productupdate');
Route::get('/deleteproduct/{id}',[ImageController::class,'destroy'])->name('productdelete');



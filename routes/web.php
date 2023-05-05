<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\MainController;

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
Route::get('home',[MainController::class,'hello']);
Route::get('home',[MainController::class,'show']);
Route::post('home', [MainController::class,'store'])->name('data.store');
Route::get('delete/{id}',[MainController::class,'khatam'])->name('data.delete');
Route::put('edit/{id}',[MainController::class,'edit'])->name('data.edit');
Route::get('clear',[MainController::class,'clear'])->name('data.clear');
Route::get('image',[ImgController::class,'show_img']);
Route::post('image',[ImgController::class,'imgstore'])->name('img.store');

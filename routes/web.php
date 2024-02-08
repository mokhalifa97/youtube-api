<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[AuthController::class,'login'])->name('login');

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::post('/details',[DetailController::class,'save'])->name('details.save');
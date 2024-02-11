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
Route::post('/login',[AuthController::class,'loginUser'])->name('login.user');

Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/registration',[AuthController::class,'registration'])->name('registration');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::post('/details',[DetailController::class,'save'])->name('details.save');
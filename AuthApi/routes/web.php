<?php

use App\Http\Controllers\UserController;
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
Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/postlogin', [UserController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [UserController::class, 'register'])->name('signup');
Route::post('/postregister', [UserController::class, 'postregister'])->name('postregister');

Route::middleware('auth')->group(function (){
    Route::get('/home', [UserController::class, 'home'])->name('home');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

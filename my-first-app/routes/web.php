<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/customizelogin', function () {
    return view('customizelogin');
});

Route::Get('/register', function () {
    return view('register');
});
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');


Route::post('/customizeLogin', [LoginController::class, 'login'])->name('customizeLogin');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
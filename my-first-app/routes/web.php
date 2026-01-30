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

//Root route (first page to load upon starting the web)
Route::get('/', [LoginController::class, 'showLoginForm'])
    ->middleware('guest');
Route::get('/home', function () { return redirect('/dashboard'); });

Route::get('/customizeLogin', [LoginController::class, 'showLoginForm'])->middleware('guest','prevent-back-history')->name('login');
Route::post('/customizeLogin', [LoginController::class, 'login'])
    ->middleware('guest', 'prevent-back-history')
    ->name('login.submit');

Route::get('/register', function () {
    return view('register');
})->middleware('guest')->name('register.form');

Route::post('/register', [RegisterController::class, 'register'])
    ->middleware('guest')
    ->name('register.submit');

Route::get('/contact', function () { return view('contact'); });
Route::get('/welcome', function () { return view('welcome'); })
    ->middleware('auth');

Route::get('/dashboard', function(){ return view('dashboard'); })
    ->middleware('auth', 'prevent-back-history');

//Logout
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();                // End the user session
    request()->session()->invalidate(); // Invalidate session
    request()->session()->regenerateToken(); // Prevent CSRF reuse
    return redirect('/customizeLogin')->with('success', 'You have been logged out.');
})->name('logout');



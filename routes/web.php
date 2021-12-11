<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->name('password.request');

Route::post('/forgot-password', function() {})->name('password.email');

Route::get('/confirm-password', function() {
    return view('auth.confirm-password');
})->name('password.confirm');

Route::get('/reset-password/{token}', function(Request $request) {
    return view('auth.reset-password', compact('request'));
});

Route::post('/fsd', function() {})->name('password.update');
Route::post('/fsd', function() {})->name('verification.send');

Route::get('/logout', function() {})->name('logout');

Route::get('/verify-email', function() {
    return view('auth.verify-email');
});
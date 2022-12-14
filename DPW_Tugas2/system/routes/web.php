<?php

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
    return view('welcome');
});

Route::get('home', function () {
    return view('template.home');
});

Route::get('login', function () {
    return view('template.login');
});

Route::get('product', function () {
    return view('template.product');
});

Route::get('register', function () {
    return view('template.register');
});

Route::get('contact', function () {
    return view('template.contact');
});

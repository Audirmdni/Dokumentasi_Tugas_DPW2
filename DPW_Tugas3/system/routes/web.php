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

Route::get('collections', function () {
    return view('template.product');
});

Route::get('register', function () {
    return view('template.register');
});

Route::get('contact', function () {
    return view('template.contact');
});

Route::get('template', function () {
    return view('template_2.base');
});

Route::get('beranda', function () {
    return view('template_2.beranda');
});

Route::get('produk', function () {
    return view('template_2.produk');
});
Route::get('kategori', function () {
    return view('template_2.kategori');
});

Route::get('login', function () {
    return view('template_2.login');
});

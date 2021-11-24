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
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/shop', function () {
    return view('shop_page');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/checkout',function (){
    return view('checkout');
});
Route::get('/comparepage', function (){
    return view('comparepage');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/single-blog', function (){
    return view('single-blog');
});
Route::get('/forgot-password', function (){
    return view('forgot-password');
});
Route::get('/wishlist', function (){
    return view('wishlist');
});
Route::get('/404', function (){
    return view('404');
});
Route::get('/cart', function (){
    return view('cart');
});
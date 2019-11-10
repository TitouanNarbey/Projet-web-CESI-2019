<?php

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
//Route de Test
Route::get('blade', function () {
    return view('child');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('cart', 'CartsController@showCart');

Route::get('checkout', 'CartsController@showCheckout');

Route::get('legal', 'LegalsController@showLegalNotices');

Route::get('legal/cookies', function () {
    return view('legalcookies');
});
Route::get('legal/CGV', 'LegalsController@showCGV');

Route::get('shop', function () {
    return view('shop');
});
Route::get('shop/{id}', function () {
    return view('article');
});
Route::get('events', function () {
    return view('events');
});
Route::get('events/{id}', function () {
    return view('event');
});
Route::get('temp', function () {
    return controller('temp');
});


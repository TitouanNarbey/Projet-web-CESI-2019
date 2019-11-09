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
    return view('home');
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
Route::get('cart', function () {
    return view('cart');
});
Route::get('legal', function () {
    return view('legal');
});
//Benjamin, n'hésite pas à modifier les routes en fonction de ce que tu as besoin pour la partie légal
Route::get('legal/cookies', function () {
    return view('legalcookies');
});
Route::get('legal/CGV', function () {
    return view('legalcgv');
});
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


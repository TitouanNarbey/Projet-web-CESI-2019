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

Route::get('/', 'EventsController@homeEventArticle');
Route::get('home', 'EventsController@homeEventArticle')->name('home');

//To register a user
Route::get('register', 'UsersController@register');
Route::post('register', 'UsersController@postregister');

// Login
Route::get('login', 'UsersController@showlogin');
Route::post('login', 'UsersController@postlogin');

// Profile
Route::get('profile', 'UsersController@profile');
Route::get('disconnect', 'UsersController@disconnect');

Route::get('cart', 'CartsController@showCart');
Route::post('changequantity', 'CartsController@changequantity');
Route::post('deleteComande', 'CartsController@deleteComande');
Route::post('valideComande', 'CartsController@valideComande');

Route::post('paypal', 'PaymentController@payWithpaypal');

Route::get('checkout', 'CartsController@showCheckout');

Route::get('legal', 'LegalsController@showLegalNotices')->name('legal');
Route::get('legal/CGV', 'LegalsController@showCGV');

Route::get('shop', 'ShopController@shops');

Route::get('shop/{id}', 'ShopController@shop');
Route::post('shop/{id}', 'ShopController@addToCard');

Route::get('events', 'EventsController@events');

Route::get('events/{id}', 'EventsController@event');
Route::post('events/{id}', 'EventsController@eventAction');
Route::post('events/{id}/postComment', 'EventsController@postComment'); 
Route::post('events/{id}/imageUploadPost', 'EventsController@imageUploadPost');
Route::post('removeLike', 'EventsController@removeLike'); 
Route::post('giveLike', 'EventsController@giveLike');

Route::get('downloadAllImages', 'DownloadController@downloadAllImages');
Route::get('acceptCookies', 'UsersController@acceptCookies');

Route::group(['prefix'=>'admin','middleware'=>'checkadmin'],function(){
    Route::get('/', 'AdminController@dashboard');
    Route::get('shop', 'AdminController@triAdminArticle');

    Route::get('events', 'AdminController@triAdminEvent');
    Route::get('shop/{id}', 'AdminController@articleAdmin');
    Route::get('events/{id}', 'AdminController@eventAdmin');
    Route::get('new-article', 'AdminController@createArticle');
    Route::get('new-event', 'AdminController@createEvent');
    Route::post('new-article', 'AdminController@postCreateArticle');
    Route::post('new-event', 'AdminController@postCreateEvent');
    Route::post('deleteArticle', 'AdminController@deleteArticle');
    Route::post('deleteEvent', 'AdminController@deleteEvent');
    Route::post('deleteComment', 'AdminController@deleteComment');

    //Dynamic list of users
    Route::get('useradmin', 'UseradminController@useradmin');
    Route::get('/useradmin/read-data', 'UseradminController@readData')->name('useradmin.action');

    //To update an user
    Route::get('/useradmin/edit', 'UseradminController@edit');
    Route::post('/useradmin/update', 'UseradminController@update');
});

Route::get('events/{id}/export', 'ParticipateController@export');
Route::get('report', 'ReportController@showForm');
Route::post('report', 'ReportController@postReport');
Route::post('deleteReport', 'ReportController@deleteReport');
Route::post('setDeliverOrder', 'CartsController@setDeliverOrder');

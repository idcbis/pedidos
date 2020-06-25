<?php

/* Home */
Route::get('/', function () { return view('welcome'); });

/* Login routes */
Auth::routes();

/* Global controller */
Route::get('/home', 'HomeController@index')->name('home');

/* User Routes */
Route::prefix('user')->group(function () {
  Route::get('home', 'UserController@home')->name('userHome');
  Route::get('new-order', 'UserController@newOrder')->name('userNewOrder');
  Route::get('stock', 'UserController@stock')->name('userStock');
  Route::post('post-stock', 'UserController@postStock')->name('postUserStock');
  Route::get('order-history', 'UserController@orderHistory')->name('userOrderHistory');
  Route::get('order-detail/{id}', 'UserController@orderDetail')->name('userOrderDetail');
});

/* Shipping Routes */
Route::prefix('shipping')->group(function () {
  Route::get('/dashboard', 'ShippingController@dashboard')->name('shippingDashboard');
});

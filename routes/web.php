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
  Route::get('order-history', 'UserController@orderHistory')->name('userOrderHistory');
});

/* Shipping Routes */
Route::prefix('shipping')->group(function () {
  Route::get('/dashboard', 'ShippingController@dashboard')->name('shippingDashboard');
});

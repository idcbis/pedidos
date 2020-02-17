<?php

/* Home */
Route::get('/', function () { return view('welcome'); });

/* Login routes */
Auth::routes();

/* User Routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/order-history', 'HomeController@orderHistory')->name('orderHistory');

/* Shipping Routes */
Route::get('/dashboard', 'ShippingController@dashboard')->name('dashboard');

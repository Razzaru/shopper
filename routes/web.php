<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@home');
Route::get('/test', 'IndexController@test');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/profile', 'ProfileController@profile');
Route::get('/wishlist', 'ProfileController@wishlist');
Route::get('/cart', 'ProfileController@cart');
Route::get('/history', 'ProfileController@history');
Route::get('/checkout', 'ProfileController@checkout');

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/{path}/', 'ProductsController@category');
Route::get('/{path}/{subcategory}', 'ProductsController@subcategory');
Route::get('/{path}/{subcategory}/{brand}', 'ProductsController@brand');


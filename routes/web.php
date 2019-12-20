<?php

Route::get('/','MainController@index');
Route::post('/insertproduct','ProductController@insert')->name('insertProduct');;
Route::get('/insertproduct','ProductController@insertshow');

Route::get('/product/{id}', 'ProductController@show')->name('product');
Route::get('/product', 'ProductController@get')->name('products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

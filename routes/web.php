<?php

Route::get('/','MainController@index')->name('/menu');
Route::post('/insertproduct','ProductController@insert')->name('insertProduct');;
Route::get('/insertproduct','ProductController@insertshow')->name('InsProd');

Route::get('/product/{type}/{id}', 'ProductController@show')->name('product');
Route::get('/categ', 'ProductController@cat')->name('categories');
Route::get('/product/', 'ProductController@get')->name('products');
Route::post('/addtobasket','UserproductController@buy')->name('buy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

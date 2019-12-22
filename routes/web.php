<?php

Route::get('/','MainController@index')->name('/menu');
Route::post('/insertproduct','ProductController@insert')->name('insertProduct');;
Route::get('/insertproduct','ProductController@insertshow')->name('InsProd');

Route::get('/categ/{type}/{id}', 'ProductController@show')->name('product');
Route::get('/categ', 'ProductController@cat')->name('categories');
Route::get('/categ/{type}', 'ProductController@get')->name('products');
Route::post('/addtobasket','UserproductController@buy')->name('buy');
Route::get('/basket','ProductController@showbasket')->name('showbasket');
Route::post('/basket','UserproductController@buyall')->name('buyall');
Route::post('/basket','UserproductController@delfrombask')->name('delfrombasket');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

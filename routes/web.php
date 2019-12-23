<?php

Route::get('/','MainController@index')->name('/menu');
Route::post('/insertproduct','ProductController@insert')->name('insertProduct');;
Route::get('/insertproduct','ProductController@insertshow')->name('InsProd');

Route::get('/categ/{type}/{id}', 'ProductController@show')->name('product');
Route::get('/categ', 'ProductController@cat')->name('categories');
Route::get('/categ/{type}', 'ProductController@get')->name('products');
Route::post('/addtobasket','UserproductController@buy')->name('buy');
Route::get('/basket','ProductController@showbasket')->name('showbasket');
Route::post('/Mails.contact-mail','Mailsettings@sendmail')->name('sendmail');
Route::post('/basket','UserproductController@buyall')->name('buying');
Route::delete('/basket','UserproductController@delfrombask')->name('delfrombasket');
Route::get('/send','HomeController@buysend')->name('buysend');
Route::get('/noprod','ProductController@showbasket')->name('noprod');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

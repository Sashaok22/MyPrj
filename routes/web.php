<?php
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','MainController@index')->name('/menu');
Route::get('/categ', 'ProductController@cat')->name('categories');
Route::get('/categ/{type}', 'ProductController@get')->name('products');
Route::post('/categ/{type}', 'ProductController@sort')->name('sort');

Route::middleware(['auth'])->group(function (){
    Route::middleware(['admin'])->group(function () {
        Route::post('/insertproduct', 'ProductController@insert')->name('insertProduct');;
        Route::get('/insertproduct', 'ProductController@insertshow')->name('InsProd');
        Route::post('/categ/{type}/{id}', 'ProductController@delprod')->name('delprod');
        Route::get('/stat','MainController@st')->name("stat");
        Route::post('/stat','MainController@sort')->name("sort2");
    });
Route::post('/addtobasket','UserproductController@buy')->name('buy');
Route::get('/basket','ProductController@showbasket')->name('showbasket');
Route::post('/Mails.contact-mail','Mailsettings@sendmail')->name('sendmail');
Route::post('/basket','UserproductController@buyall')->name('buying');
Route::delete('/basket','UserproductController@delfrombask')->name('delfrombasket');
Route::get('/send','HomeController@buysend')->name('buysend');
Route::get('/noprod','ProductController@showbasket')->name('noprod');
Route::get('/categ/{type}/{id}', 'ProductController@show')->name('product');

});



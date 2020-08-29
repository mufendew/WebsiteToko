<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','HomeController@index');

Route::get('p/{slug}', 'ProductController@detail')->name('product');

Route::get('whislist','WhislistController@show')->name('whislist');
Route::get('counterWhislist','WhislistController@counterWhislist');
Route::get('addWhislist/{id}','WhislistController@addWhislist');
Route::get('deleteWhislist/{id}','WhislistController@delete');

Route::get('cart','CartController@show')->name('cart');
Route::get('counterCart','CartController@counterCart');
Route::get('addCart/{id}','CartController@addCart');
Route::get('deleteCart/{id}','CartController@delete');
Route::post('updateCart','CartController@update')->name('updateCart');

Route::get('checkout','CheckoutController@show')->name('checkout');
Route::post('checkoutProceed','CheckoutController@insert')->name('checkoutProceed');

Route::get('About','AboutController@index')->name('about');
Route::get('FAQ','AboutController@faq')->name('FAQ');


Route::get('search', 'ProductController@cari')->name('search');
Route::get('{merek}/{slug}', 'ProductController@detail');
Route::get('c/{catagory}','CatagoryController@show');
Route::get('logoutt', function (){
    return Auth::logout();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

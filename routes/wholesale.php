<?php

/*
|--------------------------------------------------------------------------
| B2B Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){

    Route::get('/wholesale/all-products', 'WholesaleProductController@index')->name('wholesale-products.all');
    Route::get('/wholesale-product/create', 'WholesaleProductController@create')->name('wholesale-products.create');
    Route::post('/wholesale-product/store', 'WholesaleProductController@store')->name('wholesale-products.store');
    Route::get('/wholesale-product/{id}/edit', 'WholesaleProductController@edit')->name('wholesale-products.edit');
    Route::post('/wholesale-product/update/{id}', 'WholesaleProductController@update')->name('wholesale-products.update');
    Route::get('/wholesale-product/destroy/{id}', 'WholesaleProductController@destroy')->name('wholesale-products.destroy');

});

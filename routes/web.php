<?php

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

Route::get('/' , function () {
    return view('home');
})->name('home');

Route::get('/delivery' , function () {
    return view('delivery');
})->name('delivery');

Route::get('/delivery/categories' , 'DeliveryController@displayCategories')->name('categories');
Route::get('/delivery/categories/items/{categoryId}' , 'DeliveryController@displayItems')->name('items');
Route::get('/delivery/categories/items/{categoryId}/meal/{itemId}' , 'DeliveryController@displayItem')->name('item');
Route::get('/checkout/{stepNo}' , 'DeliveryController@displayCheckout')->name('checkout');

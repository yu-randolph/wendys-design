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

Route::get('/{siteNo}' , function ($siteNo) {
    return view('home',compact('siteNo'));
})->name('home');

Route::get('/{siteNo}/delivery' , function ($siteNo) {
    return view('delivery',compact('siteNo'));
})->name('delivery');

Route::get('/{siteNo}/delivery/categories' , 'DeliveryController@displayCategories')->name('categories');
Route::get('/{siteNo}/delivery/categories/items/{categoryId}' , 'DeliveryController@displayItems')->name('items');
Route::get('/{siteNo}/delivery/categories/items/{categoryId}/meal/{itemId}' , 'DeliveryController@displayItem')->name('item');
Route::get('/{siteNo}/checkout/{stepNo}' , 'DeliveryController@displayCheckout')->name('checkout');

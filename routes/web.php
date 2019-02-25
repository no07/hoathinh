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


Route::group(['prefix' => 'manager','as' => 'manager::'],function () {
    Route::any('/login',['as' => 'login','uses' => 'BackendController@login']);
    Route::any('/dashboard',['as' => 'dashboard','uses' => 'BackendController@dashboard']);
    Route::any('/category',['as' => 'category','uses' => 'BackendController@category']);
    Route::any('/product',['as' => 'product','uses' => 'BackendController@product']);
    Route::any('/product/update',['as' => 'product-update','uses' => 'BackendController@productUpdate']);
});


Route::any('/',['as' => 'index','uses' => 'FrontendController@index']);
Route::any('/danh-muc/{id}/{slug}',['as' => 'category','uses' => 'FrontendController@category']);
Route::any('/san-pham/{id}/{slug}',['as' => 'product','uses' => 'FrontendController@product']);
Route::any('/lien-he',['as' => 'contact','uses' => 'FrontendController@contact']);

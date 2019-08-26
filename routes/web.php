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

//pages routes
Route::get('/', 'PagesController@index');
Route::get('/about', 'pagesController@about');
Route::get('/testimony', 'pagesController@services');

//auth routes
Auth::routes();

//dashboard routes
Route::get('/home', 'HomeController@index')->name('home');

//investment routes
Route::get('/home/investment', 'InvestmentController@create');
Route::post('/home/investment/store/{id}', 'InvestmentController@store');

//payment img routes
Route::get('/home/investment/img/{id}', 'PaymentImgController@create');
Route::post('/home/investment/img/store/{id}', 'PaymentImgController@store');

//withdraw routes
Route::get('/home/investment/withdraw/{id}', 'WithdrawController@store');
Route::get('/home/investment/refwithdraw/{id}', 'RefWithdrawController@store');

//Account manger
Route::get('/home/manager', 'ManagerController@index');

//learn to trade
Route::get('/home/trade', 'LearnTradeController@index');

// trade for yourself
Route::get('/home/currency', 'TradingController@index');





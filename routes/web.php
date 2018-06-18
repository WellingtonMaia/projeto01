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

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

	Route::get('/', 'AdminController@index')->name('admin.home');
	
	//Balance
	Route::get('balance', 'BalanceController@index')->name('
		admin.balance');
	
	//DUAS ROTAS DO MESMO NOME E TIPO(GET,POST) VAI DAR CONFLITO
	//Deposit
	Route::get('deposit', 'DepositController@index')->name('deposit');
	Route::post('deposit', 'DepositController@store')->name('deposit.store');
	//Historic
	Route::get('historic', 'HistoricController@index')->name('admin.historic');
});



Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();



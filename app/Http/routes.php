<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// 検索フォームのためのルーティング
Route::get('cards/search', 'CardsController@search')->name('cards.search');

Route::get('/', 'CardsController@index');

Route::resource('cards', 'CardsController'); //cards/というURLに対してのリクエスト

Route::resource('charts', 'ChartsController'); //charts/というURLに対してのリクエスト

Route::get('charts/chart/{id}', 'ChartsController@chart')->name('charts.chart');

Route::get('charts/result/{id}', 'ChartsController@result')->name('charts.result');

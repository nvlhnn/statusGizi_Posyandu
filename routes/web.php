<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dataAnak', function () {
    return view('Data Anak/Index');
});

Route::resource('babies', 'BabiesController')->middleware('auth');;
Route::resource('kader', 'KaderController')->middleware('auth');;
Route::resource('fuzzys', 'FuzzysController')->middleware('auth');;
Route::resource('statuses', 'StatusesController')->middleware('auth');;
Route::get('statuses/riwayat/{id}', 'StatusesController@riwayat')->middleware('auth');;
Route::get('statuses/riwayat/cetak/{id}', 'StatusesController@cetak')->middleware('auth');;



Route::post('/kader/create', 'KaderController@create')->middleware('auth');;
Route::get('fuzzy/{id}', 'FuzzysController@calculate')->middleware('auth');;
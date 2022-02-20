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

Route::get('/', 'TopPageController@index');
Route::get('/list', 'ListController@index');
Route::get('/photo', 'PhotoController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/mypage', 'MypageController@add')->middleware('auth');
Route::get('/profile', 'MypageController@profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

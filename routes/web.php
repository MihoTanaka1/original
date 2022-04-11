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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('/mypage', 'MypageController@index');
     Route::get('/profile', 'MypageController@profile');
     Route::post('/profile', 'ProfileController@index');
     Route::get('/profile-create', 'ProfileController@add');
     Route::post('/profile-create', 'ProfileController@create');
     Route::get('/profile/{user_id}', 'ProfileController@ProfileShow')->name("profile.show");
});


Route::group(['prefix' => 'photo'], function() {
     Route::get('/index', 'PhotoController@index');
     Route::get('/create', 'PhotoController@add');
     Route::post('/create', 'PhotoController@create');
});

Route::group(['prefix' => 'travel', 'middleware' => 'auth'], function() {
     Route::get('/create', 'TravelController@add');
     Route::post('/create', 'TravelController@create');
     Route::get('/index', 'TravelController@index'); 
     Route::get('/edit', 'TravelController@edit');
     Route::post('/edit', 'TravelController@update'); 
     Route::get('/delete', 'TravelController@delete'); 
});

Route::get('/travel/list', 'TravelListController@index');

Route::get('travel/list/{info_id}', 'TravelListController@show')->name("travel.show");
Route::get('photo/index/{info_id}', 'PhotoController@show')->name("photo.show");
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


Auth::routes();


Route::group(['middleware' => 'admin'], function () {
    
Route::get('/admin','Admin\AdminController@index')->name('Admin');
Route::get('/setting','Admin\AdminController@setting')->name('Setting');
Route::post('/apisave','Admin\AdminController@apisave');

Route::get('/all_movie','Admin\AdminController@movie');
Route::get('movie/{id}/view','Admin\AdminController@movie_view');
Route::get('movie/{id}/del','Admin\AdminController@movie_del');
Route::get('/movie/create','Admin\AdminController@movie_create');
Route::get('/movie/manual','Admin\AdminController@movie_manual');
Route::post('/movie/manual','Admin\AdminController@movie_manual_save');
Route::post('/movie/create/save','Admin\AdminController@movie_create_save');
Route::get('/movie/{id}/edit','Admin\AdminController@movie_edit');
Route::post('/movie/{id}/update','Admin\AdminController@movie_updat');

Route::get('/all_series','Admin\AdminController@series');
Route::get('/series/view/{id}/all','Admin\AdminController@series_view');
Route::get('/series/edit/{id}','Admin\AdminController@series_edit');
Route::post('/series/update/{id}','Admin\AdminController@series_update');
Route::get('/series/del/{id}','Admin\AdminController@series_del');
Route::get('/series/create','Admin\AdminController@series_create');
Route::post('/series/create/save','Admin\AdminController@series_create_save');


Route::get('/users','Admin\AdminController@users');
Route::get('/user/{id}/view','Admin\AdminController@user_view');
Route::get('/user/{id}/buy','Admin\AdminController@buylist');
Route::get('/user/{movie_id}/{user_id}/buy','Admin\AdminController@buylist_save')->name('user.buy');

Route::get('/print','PrintController@print');
Route::get('/print/movie','PrintController@movie_print');
Route::get('/print/movie/view','PrintController@movie_print_view');
Route::get('/print/series','PrintController@series_print');
Route::get('/print/series/{id}','PrintController@series_print_view');
Route::get('/print/movie/now/{type}/{start}/{end}','PrintController@movie_print_now');
Route::get('/year/print/movie/','PrintController@movie_print_filter_year');
Route::get('/year/print/movie/now/{year}/{type}','PrintController@movie_print_now_year');
    
});


Route::get('/','FrontendController@index');
Route::get('/movie', 'FrontendController@movie');
Route::get('movie/{id}','FrontendController@view');
Route::get('/series/{country}', 'FrontendController@series');
Route::get('/series/view/{id}', 'FrontendController@series_view');
Route::get('/movie/{id}/addwitchlist','HomeController@addwatchlist');
Route::get('/watchlist','HomeController@watch');
Route::get('/watchlist/{id}/remove','HomeController@removewatchlist');
Route::get('/search','FrontendController@search');

Route::get('/about','HomeController@about');

Route::get('/api/{id}/{key}','FrontendController@api');

Route::get('/kt/{link}','FrontendController@short');




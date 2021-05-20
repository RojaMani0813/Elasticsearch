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
use App\Article;

// Route::get('/', function () {
//     Article::createIndex($shards = null, $replicas = null);

//     Article::putMapping($ignoreConflicts = true);

//     Article::addAllToIndex();

//     return view('welcome');
// });
Route::get('/', 'MovieController@index');

Route::get('/movies', 'MovieController@index')->name('movies');

Route::get('/add', 'MovieController@create')->name('add-movie');

Route::post('/store', 'MovieController@store')->name('store-movie');

Route::post('/search', 'MovieController@search')->name('search-movie');
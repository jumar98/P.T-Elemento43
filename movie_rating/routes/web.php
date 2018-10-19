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

//User
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', 'HomeController@profile')->name('profile');

//Theaters 
Route::get('/theaters', 'TheaterController@index')->name('theaters');
Route::get('theater/{theater_id}/movies/', 'MovieController@index')->name('movies');

//Movies
Route::get('movie/{movie_id}/ratings', 'ScoreController@index')->name('rating');
Route::get('movie/{movie_id}/qualify', 'ScoreController@qualify')->middleware('auth')->name('qualify');

//Scores

//Retornar error ante duplicidad de voto
Route::post('score/store', 'ScoreController@store')->name('store.score');
Route::get('scores/{user_id}', 'ScoreController@list')->middleware('auth')->name('scores.list');

//Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


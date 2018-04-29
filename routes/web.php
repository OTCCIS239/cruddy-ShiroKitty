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

Route::get('/', function () {
    return view('home');
});

Route::resource('games', 'GameController');

// Route::resources([
//     'anime' => 'AnimeController',
//     'movies' => 'MovieController',
//     'books' => 'BookController',
//     'games' => 'GameController',
//     'shows' => 'ShowController'
// ]);
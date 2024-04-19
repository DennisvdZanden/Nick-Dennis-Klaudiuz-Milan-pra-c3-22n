<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::get('/tournaments', 'TournamentController@index');
Route::get('/tournaments/{id}', 'TournamentController@show');
Route::get('/tournaments/create', 'TournamentController@create');
Route::post('/tournaments', 'TournamentController@store');

Route::get('/teams', 'TeamController@index');
Route::get('/teams/{id}', 'TeamController@show');
Route::get('/teams/create', 'TeamController@create');
Route::post('/teams', 'TeamController@store');


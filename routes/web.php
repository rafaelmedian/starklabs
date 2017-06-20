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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/build-bot", "BotController@index");
Route::post("/bot/create", "BotController@create");
Route::get("/bot/thank-you", "BotController@thankYou");

Route::get("/job-application", "JobApplicationController@index");
Route::post("/jobapplication/create", "JobApplicationController@create");
Route::get("/jobapplication/thank-you", "JobApplicationController@thankYou");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

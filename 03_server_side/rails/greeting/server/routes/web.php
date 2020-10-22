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

Route::get('/comments/freeword/{fight}', ('GreetingController@show1'));
Route::get('/comments/random', ('GreetingController@show2'));
Route::get('/comments/{greeting}', ('GreetingController@show'));
//{greeting}にfreeword,randomが入るとエラーが出るから順番を変える
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

Route::get('/comments/freeword/{word}', ('GreetingController@show2'));
Route::get('/comments/random', ('GreetingController@show3'));
Route::get('/comments/{greeting}', ('GreetingController@show1'));
//{greeting}にfreeword,randomが入るとエラーが出るから順番を変える
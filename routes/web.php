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

Route::get('login', 'HomeController@index');
Route::post('login', 'HomeController@login');
Route::get('roles', 'HomeController@roles');
Route::get('logout', 'HomeController@logout');
Route::get('home', 'HomeController@viewHome')->middleware('isLoggedIn');
Route::get('change_password', 'HomeController@viewChangePassword')->middleware('isLoggedIn');
Route::post('change_password', 'HomeController@changePassword')->middleware('isLoggedIn');

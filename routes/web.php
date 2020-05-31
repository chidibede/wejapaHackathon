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

Route::get('/', 'PagesController@index');
Route::get('/developer', 'PagesController@developer');
Route::get('/jobs', 'PagesController@jobs');
Route::get('/applications', 'PagesController@applications');
Route::get('/register', 'UsersController@register');
Route::get('/login', 'UsersController@login');

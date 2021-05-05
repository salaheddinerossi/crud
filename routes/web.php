<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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


Route::get('/','PageController@index');
Route::get('/category','PageController@category');
Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::get('/style','PageController@style');
Route::resource('post', 'PostController');

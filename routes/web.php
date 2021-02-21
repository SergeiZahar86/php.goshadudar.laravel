<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

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

Route::get('/', 'App\Http\Controllers\NewController@home');
Route::get('/about', 'App\Http\Controllers\NewController@about');
Route::get('/review', 'App\Http\Controllers\NewController@review');
Route::post('/review/check', 'App\Http\Controllers\NewController@review_check');

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

Route::view('/', 'home') -> name('home');
//Route::view('/', 'landing') -> name('landing');
Route::view('/home', 'home') -> name('home');


//Route::get('user', 'App\Http\Controllers\User@index')->name('user.index');



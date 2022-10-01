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

Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@home')->name('home');
Route::get('/login','HomeController@login')->name('login');
Route::get('/about','HomeController@about')->name('about');
Route::get('/user_registration','HomeController@user_registration')->name('user_registration');
Route::post('/save_register','HomeController@save_register')->name('save_register');
Route::get('/admin_index','AdminController@admin_index')->name('admin_index');  
Route::get('/admin_home','AdminController@admin_home')->name('admin_home'); 
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

Route::get('/', 'App\Http\Controllers\PageController@index')->name('page.index');
Route::get('/contacts', 'App\Http\Controllers\PageController@contacts')->name('page.contacts');
Route::get('/prices', 'App\Http\Controllers\PageController@prices')->name('page.prices');
Route::get('/service/{service}', 'App\Http\Controllers\ServiceController@show')->name('service.show');
Route::post('/feedback','App\Http\Controllers\FeedbackController@store')->name('feedback.store');
Route::get('/gallery', 'App\Http\Controllers\PageController@gallery')->name('page.gallery');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

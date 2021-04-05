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

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\AdminIndexController@index')->name('admin.index');
    Route::get('/settings', 'App\Http\Controllers\Admin\AdminController@settings')->name('admin.settings');
    Route::get('/gallery', 'App\Http\Controllers\Admin\AdminController@gallery')->name('admin.gallery');
    Route::resource('/pages', 'App\Http\Controllers\Admin\AdminPagesController');
    Route::resource('/services', 'App\Http\Controllers\Admin\AdminServicesController');
    Route::get('/price/edit-all-prices', 'App\Http\Controllers\Admin\AdminPriceController@editAllPrices')->name('editAllPrices');
    Route::post('/price/update-all-prices', 'App\Http\Controllers\Admin\AdminPriceController@updateAllPrices')->name('updateAllPrices');
    Route::post('/prices/update-price-for-service/{price}', 'App\Http\Controllers\Admin\AdminPriceAjaxController@updatePriceForService')->name('updatePriceForService');
    Route::resource('/prices', 'App\Http\Controllers\Admin\AdminPriceController');
    Route::resource('/feedbacks', 'App\Http\Controllers\Admin\AdminFeedbackController');
    Route::resource('/gallery', 'App\Http\Controllers\Admin\AdminGalleryController');
});

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

Route::group(['prefix' => 'admin'], function () {
    //Tour
    Route::get('/tour-list', 'TourController@index')->name('tour-list');
    Route::post('add-tour-processing', 'TourController@store')->name('add-tour');
    // Loại tour
    Route::get('/tour-type-list', 'TourTypeController@index')->name('tour-type-list');
    Route::post('/add-tour-type-processing', 'TourTypeController@store')->name('add-tour-type');
    Route::get('/edit-type/{id}', 'TourTypeController@edit')->name('edit-type');
    Route::post('/update-type/{id}', 'TourTypeController@update')->name('update-type');
    Route::get('/delete-type/{id}', 'TourTypeController@destroy')->name('delete-type');
    Route::get('/search-type', 'TourTypeController@search')->name('search-type');
    // Khuyến mãi
    Route::get('/promo-list', 'PromoController@index')->name('promo-list');
    Route::post('/add-promo-processing', 'PromoController@store')->name('add-promo');
    Route::get('/edit-promo/{id}', 'PromoController@edit')->name('edit-promo');
    Route::post('/update-promo/{id}', 'PromoController@update')->name('update-promo');
    Route::get('/delete-promo/{id}', 'PromoController@destroy')->name('delete-promo');
    Route::get('/search-promo', 'PromoController@search')->name('search-promo');
    Route::get('/detail-promo/{id}', 'PromoController@show')->name('detail-promo');
});

Route::get('/', function () {
    return view('client.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
// Route::get('/admin/tour', function () {
//     return view('admin.tour.tour');
// });

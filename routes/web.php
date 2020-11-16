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
    Route::get('/tour-list', 'TourController@index')->name('tour-list');
    Route::post('add-tour-processing', 'TourController@store')->name('add-tour');
    Route::get('/tour-type-list', 'TourTypeController@index')->name('tour-type-list');
    Route::post('/add-tour-type-processing', 'TourTypeController@store')->name('add-tour-type');
    Route::get('/edit-type/{id}', 'TourTypeController@edit')->name('edit-type');
    Route::post('/update-type/{id}', 'TourTypeController@update')->name('update-type');
    Route::get('/delete-type/{id}', 'TourTypeController@destroy')->name('delete-type');
    Route::get('/search-type', 'TourTypeController@search')->name('search-type');
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

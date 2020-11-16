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
    Route::get('/tour-list', 'App\Http\Controller\TourController@index')->name('tour-list');
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

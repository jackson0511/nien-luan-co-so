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
    //1.Tour
    Route::get('/tour-list', 'TourController@index')->name('tour-list');
    Route::get('/create-tour', 'TourController@create')->name('create-tour');
    Route::post('/add-tour-processing', 'TourController@store')->name('add-tour');
    Route::get('/detail-tour/{id}', 'TourController@show')->name('detail-tour');
    Route::get('/delete-tour/{id}', 'TourController@destroy')->name('delete-tour');
    Route::get('/edit-tour/{id}', 'TourController@edit')->name('edit-tour');
    Route::post('/update-tour/{id}', 'TourController@update')->name('update-tour');

    // 2.Loại tour
    Route::get('/tour-type-list', 'TourTypeController@index')->name('tour-type-list');
    Route::post('/add-tour-type-processing', 'TourTypeController@store')->name('add-tour-type');
    Route::get('/edit-type/{id}', 'TourTypeController@edit')->name('edit-type');
    Route::post('/update-type/{id}', 'TourTypeController@update')->name('update-type');
    Route::get('/delete-type/{id}', 'TourTypeController@destroy')->name('delete-type');
    Route::get('/search-type', 'TourTypeController@search')->name('search-type');
    // 3.Khuyến mãi
    Route::get('/promo-list', 'PromoController@index')->name('promo-list');
    Route::post('/add-promo-processing', 'PromoController@store')->name('add-promo');
    Route::get('/edit-promo/{id}', 'PromoController@edit')->name('edit-promo');
    Route::post('/update-promo/{id}', 'PromoController@update')->name('update-promo');
    Route::get('/delete-promo/{id}', 'PromoController@destroy')->name('delete-promo');
    Route::get('/search-promo', 'PromoController@search')->name('search-promo');
    Route::get('/detail-promo/{id}', 'PromoController@show')->name('detail-promo');
    // 4.Phương tiện
    Route::get('/transport-list', 'TransportController@index')->name('transport-list');
    Route::post('/add-transport-processing', 'TransportController@store')->name('add-transport');
    Route::get('/edit-transport/{id}', 'TransportController@edit')->name('edit-transport');
    Route::post('/update-transport/{id}', 'TransportController@update')->name('update-transport');
    Route::get('/delete-transport/{id}', 'TransportController@destroy')->name('delete-transport');
    Route::get('/search-transport', 'TransportController@search')->name('search-transport');
    // 5.Quốc gia
    Route::get('/nation-list', 'NationController@index')->name('nation-list');
    Route::post('/add-nation-processing', 'NationController@store')->name('add-nation');
    Route::get('/edit-nation/{id}', 'NationController@edit')->name('edit-nation');
    Route::post('/update-nation/{id}', 'NationController@update')->name('update-nation');
    Route::get('/delete-nation/{id}', 'NationController@destroy')->name('delete-nation');
    Route::get('/search-nation', 'NationController@search')->name('search-nation');
    Route::get('/detail-nation/{id}', 'NationController@show')->name('detail-nation');
    // 6.Tỉnh, thành phố
    Route::get('/province-list', 'ProvinceController@index')->name('province-list');
    Route::post('/add-province-processing', 'ProvinceController@store')->name('add-province');
    Route::get('/edit-province/{id}', 'ProvinceController@edit')->name('edit-province');
    Route::post('/update-province/{id}', 'ProvinceController@update')->name('update-province');
    Route::get('/delete-province/{id}', 'ProvinceController@destroy')->name('delete-province');
    Route::get('/search-province', 'ProvinceController@search')->name('search-province');
    Route::get('/detail-province/{id}', 'ProvinceController@show')->name('detail-province');
    // 7.Quận, huyện
    Route::get('/district-list', 'DistrictController@index')->name('district-list');
    Route::post('/add-district-processing', 'DistrictController@store')->name('add-district');
    Route::get('/edit-district/{id}', 'DistrictController@edit')->name('edit-district');
    Route::post('/update-district/{id}', 'DistrictController@update')->name('update-district');
    Route::get('/delete-district/{id}', 'DistrictController@destroy')->name('delete-district');
    Route::get('/search-district', 'DistrictController@search')->name('search-district');
    Route::get('/detail-district/{id}', 'DistrictController@show')->name('detail-district');
    // 8.Xã, Phương, Thị trấn
    Route::get('/ward-list', 'WardController@index')->name('ward-list');
    Route::post('/add-ward-processing', 'WardController@store')->name('add-ward');
    Route::get('/edit-ward/{id}', 'WardController@edit')->name('edit-ward');
    Route::post('/update-ward/{id}', 'WardController@update')->name('update-ward');
    Route::get('/delete-ward/{id}', 'WardController@destroy')->name('delete-ward');
    Route::get('/search-ward', 'WardController@search')->name('search-ward');
    Route::get('/detail-ward/{id}', 'WardController@show')->name('detail-ward');
    // 9.Đường
    Route::get('/street-list', 'PromoController@index')->name('street-list');
    Route::post('/add-street-processing', 'PromoController@store')->name('add-street');
    Route::get('/edit-street/{id}', 'PromoController@edit')->name('edit-street');
    Route::post('/update-street/{id}', 'PromoController@update')->name('update-street');
    Route::get('/delete-street/{id}', 'PromoController@destroy')->name('delete-street');
    Route::get('/search-street', 'PromoController@search')->name('search-street');
    Route::get('/detail-street/{id}', 'PromoController@show')->name('detail-street');
    // 10.Khách sạn
    Route::get('/hotel-list', 'HotelController@index')->name('hotel-list');
    Route::post('/add-hotel-processing', 'HotelController@store')->name('add-hotel');
    Route::get('/edit-hotel/{id}', 'HotelController@edit')->name('edit-hotel');
    Route::post('/update-hotel/{id}', 'HotelController@update')->name('update-hotel');
    Route::get('/delete-hotel/{id}', 'HotelController@destroy')->name('delete-hotel');
    Route::get('/search-hotel', 'HotelController@search')->name('search-hotel');
    Route::get('/detail-hotel/{id}', 'HotelController@show')->name('detail-hotel');
    // 11.Nhà hàng
    Route::get('/restaurant-list', 'RestaurantController@index')->name('restaurant-list');
    Route::post('/add-restaurant-processing', 'RestaurantController@store')->name('add-restaurant');
    Route::get('/edit-restaurant/{id}', 'RestaurantController@edit')->name('edit-restaurant');
    Route::post('/update-restaurant/{id}', 'RestaurantController@update')->name('update-restaurant');
    Route::get('/delete-restaurant/{id}', 'RestaurantController@destroy')->name('delete-restaurant');
    Route::get('/search-restaurant', 'RestaurantController@search')->name('search-restaurant');
    Route::get('/detail-restaurant/{id}', 'RestaurantController@show')->name('detail-restaurant');
    // 12.Thực đơn
    Route::get('/menu-list', 'MenuController@index')->name('menu-list');
    Route::post('/add-menu-processing', 'MenuController@store')->name('add-menu');
    Route::get('/edit-menu/{id}', 'MenuController@edit')->name('edit-menu');
    Route::post('/update-menu/{id}', 'MenuController@update')->name('update-menu');
    Route::get('/delete-menu/{id}', 'MenuController@destroy')->name('delete-menu');
    Route::get('/search-menu', 'MenuController@search')->name('search-menu');
    Route::get('/detail-menu/{id}', 'MenuController@show')->name('detail-menu');
    // 13.Món ăn
    Route::get('/dish-list', 'DishController@index')->name('dish-list');
    Route::post('/add-dish-processing', 'DishController@store')->name('add-dish');
    Route::get('/edit-dish/{id}', 'DishController@edit')->name('edit-dish');
    Route::post('/update-dish/{id}', 'DishController@update')->name('update-dish');
    Route::get('/delete-dish/{id}', 'DishController@destroy')->name('delete-dish');
    Route::get('/search-dish', 'DishController@search')->name('search-dish');
    Route::get('/detail-dish/{id}', 'DishController@show')->name('detail-dish');
    // 14.Nhân viên
    Route::get('/staff-list', 'StaffController@index')->name('staff-list');
    Route::post('/add-staff-processing', 'StaffController@store')->name('add-staff');
    Route::get('/edit-staff/{id}', 'StaffController@edit')->name('edit-staff');
    Route::post('/update-staff/{id}', 'StaffController@update')->name('update-staff');
    Route::get('/delete-staff/{id}', 'StaffController@destroy')->name('delete-staff');
    Route::get('/search-staff', 'StaffController@search')->name('search-staff');
    Route::get('/detail-staff/{id}', 'StaffController@show')->name('detail-staff');
    // 15.Chức vụ
    Route::get('/position-list', 'PositionController@index')->name('position-list');
    Route::post('/add-position-processing', 'PositionController@store')->name('add-position');
    Route::get('/edit-position/{id}', 'PositionController@edit')->name('edit-position');
    Route::post('/update-position/{id}', 'PositionController@update')->name('update-position');
    Route::get('/delete-position/{id}', 'PositionController@destroy')->name('delete-position');
    Route::get('/search-position', 'PositionController@search')->name('search-position');
    Route::get('/detail-position/{id}', 'PositionController@show')->name('detail-position');
    //  16.Ngày
    Route::get('/date-list', 'DateController@index')->name('date-list');
    Route::post('/add-date-processing', 'DateController@store')->name('add-date');
    Route::get('/edit-date/{id}', 'DateController@edit')->name('edit-date');
    Route::post('/update-date/{id}', 'DateController@update')->name('update-date');
    Route::get('/delete-date/{id}', 'DateController@destroy')->name('delete-date');
    Route::get('/search-date', 'DateController@search')->name('search-date');
    Route::get('/detail-date/{id}', 'DateController@show')->name('detail-date');
    // 17.  buổi
    Route::get('/session-list', 'SessionController@index')->name('session-list');
    Route::post('/add-session-processing', 'SessionController@store')->name('add-session');
    Route::get('/edit-session/{id}', 'SessionController@edit')->name('edit-session');
    Route::post('/update-session/{id}', 'SessionController@update')->name('update-session');
    Route::get('/delete-session/{id}', 'SessionController@destroy')->name('delete-session');
    Route::get('/search-session', 'SessionController@search')->name('search-session');
    Route::get('/detail-session/{id}', 'SessionController@show')->name('detail-session');
    // 18.Khách hàng
    Route::get('/customer-list', 'CustomerController@index')->name('customer-list');
    Route::post('/add-customer-processing', 'CustomerController@store')->name('add-customer');
    Route::get('/edit-customer/{id}', 'CustomerController@edit')->name('edit-customer');
    Route::post('/update-customer/{id}', 'CustomerController@update')->name('update-customer');
    Route::get('/delete-customer/{id}', 'CustomerController@destroy')->name('delete-customer');
    Route::get('/search-customer', 'CustomerController@search')->name('search-customer');
    Route::get('/detail-customer/{id}', 'CustomerController@show')->name('detail-customer');
    // 19. Hóa đơn
    Route::get('/receipt-list', 'ReceiptController@index')->name('receipt-list');
    Route::post('/add-receipt-processing', 'ReceiptController@store')->name('add-receipt');
    Route::get('/edit-receipt/{id}', 'ReceiptController@edit')->name('edit-receipt');
    Route::post('/update-receipt/{id}', 'ReceiptController@update')->name('update-receipt');
    Route::get('/delete-receipt/{id}', 'ReceiptController@destroy')->name('delete-receipt');
    Route::get('/search-receipt', 'ReceiptController@search')->name('search-receipt');
    Route::get('/detail-receipt/{id}', 'ReceiptController@show')->name('detail-receipt');
    // 20. Phiếu đặt tour
    Route::get('/booking-ticket-list', 'BookingTicketController@index')->name('booking-ticket-list');
    Route::post('/add-booking-ticket-processing', 'BookingTicketController@store')->name('add-booking-ticket');
    Route::get('/edit-booking-ticket/{id}', 'BookingTicketController@edit')->name('edit-booking-ticket');
    Route::post('/update-booking-ticket/{id}', 'BookingTicketController@update')->name('update-booking-ticket');
    Route::get('/delete-booking-ticket/{id}', 'BookingTicketController@destroy')->name('delete-booking-ticket');
    Route::get('/search-booking-ticket', 'BookingTicketController@search')->name('search-booking-ticket');
    Route::get('/detail-booking-ticket/{id}', 'BookingTicketController@show')->name('detail-booking-ticket');
    // 21. Địa điểm
    Route::get('/location-list', 'LoactionController@index')->name('location-list');
    Route::post('/add-location-processing', 'LoactionController@store')->name('add-location');
    Route::get('/edit-location/{id}', 'LoactionController@edit')->name('edit-location');
    Route::post('/update-location/{id}', 'LoactionController@update')->name('update-location');
    Route::get('/delete-location/{id}', 'LoactionController@destroy')->name('delete-location');
    Route::get('/search-location', 'LoactionController@search')->name('search-location');
    Route::get('/detail-location/{id}', 'LoactionController@show')->name('detail-location');
    // 22. Ăn
    Route::get('/eat-list', 'EatController@index')->name('eat-list');
    Route::post('/add-eat-processing', 'EatController@store')->name('add-eat');
    Route::get('/edit-eat/{id}', 'EatController@edit')->name('edit-eat');
    Route::post('/update-eat/{id}', 'EatController@update')->name('update-eat');
    Route::get('/delete-eat/{id}', 'EatController@destroy')->name('delete-eat');
    Route::get('/search-eat', 'EatController@search')->name('search-eat');
    Route::get('/detail-eat/{id}', 'EatController@show')->name('detail-eat');
    //  23. Ở
    Route::get('/stay-list', 'StayController@index')->name('stay-list');
    Route::post('/add-stay-processing', 'StayController@store')->name('add-stay');
    Route::get('/edit-stay/{id}', 'StayController@edit')->name('edit-stay');
    Route::post('/update-stay/{id}', 'StayController@update')->name('update-stay');
    Route::get('/delete-stay/{id}', 'StayController@destroy')->name('delete-stay');
    Route::get('/search-stay', 'StayController@search')->name('search-stay');
    Route::get('/detail-stay/{id}', 'StayController@show')->name('detail-stay');
    // 24. Chi tiết chức vụ
    Route::get('/position-detail-list', 'PositionDetailController@index')->name('position-detail-list');
    Route::post('/add-position-detail-processing', 'PositionDetailController@store')->name('add-position-detail');
    Route::get('/edit-position-detail/{id}', 'PositionDetailController@edit')->name('edit-position-detail');
    Route::post('/update-position-detail/{id}', 'PositionDetailController@update')->name('update-position-detail');
    Route::get('/delete-position-detail/{id}', 'PositionDetailController@destroy')->name('delete-position-detail');
    Route::get('/search-position-detail', 'PositionDetailController@search')->name('search-position-detail');
    Route::get('/detail-position-detail/{id}', 'PositionDetailController@show')->name('detail-position-detail');
    // 25. Chi tiết phương tiện
    Route::get('/transport-detail-list', 'TransportDetailController@index')->name('transport-detail-list');
    Route::post('/add-transport-detail-processing', 'TransportDetailController@store')->name('add-transport-detail');
    Route::get('/edit-transport-detail/{id}', 'TransportDetailController@edit')->name('edit-transport-detail');
    Route::post('/update-transport-detail/{id}', 'TransportDetailController@update')->name('update-transport-detail');
    Route::get('/delete-transport-detail/{id}', 'TransportDetailController@destroy')->name('delete-transport-detail');
    Route::get('/search-transport-detail', 'TransportDetailController@search')->name('search-transport-detail');
    Route::get('/detail-transport-detail/{id}', 'TransportDetailController@show')->name('detail-transport-detail');
    // 26. Chi tiết hoạt động
    Route::get('/activity-detail-list', 'ActivityDetailController@index')->name('activity-detail-list');
    Route::post('/add-activity-detail-processing', 'ActivityDetailController@store')->name('add-activity-detail');
    Route::get('/edit-activity-detail/{id}', 'ActivityDetailController@edit')->name('edit-activity-detail');
    Route::post('/update-activity-detail/{id}', 'ActivityDetailController@update')->name('update-activity-detail');
    Route::get('/delete-activity-detail/{id}', 'ActivityDetailController@destroy')->name('deleteactivity-detailo');
    Route::get('/search-activity-detail', 'ActivityDetailController@search')->name('search-activity-detail');
    Route::get('/detail-activity-detail/{id}', 'ActivityDetailController@show')->name('detail-activity-detail');

});

    Route::get('/', 'TourController@clientShowInfo')->name('home');
    // Route::get('/', function () {
    //     return view('client.index');
    // });
    Route::get('/destination', function () {
        return view('client.destination');
    })->name('destination');
    Route::get('/blog', function () {
        return view('client.blog');
    })->name('blog');
    Route::get('/blog-single', function () {
        return view('client.blog-single');
    })->name('blog-single');
    Route::get('/tour-single', function () {
        return view('client.tour-single');
    })->name('tour-single');
    Route::get('/about', function () {
        return view('client.about');
    })->name('about');
    Route::get('/contact', function () {
        return view('client.contact');
    })->name('contact');
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/register', function () {
        return view('register');
    })->name('register');
    Route::get('/forgot', function () {
        return view('forgotpass');
    })->name('forgot');
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Website Part
Route::get('/','HomePageController@index')->name('home');
Route::post('send-contact-message','HomePageController@storeMessage')->name('send-contact-message');
Route::get('all-news','HomePageController@allNews')->name('all-news');
Route::get('news-details/{slug}','HomePageController@newsDetails')->name('news-details');
Route::get('peoples','HomePageController@allPeoples')->name('peoples');
Route::get('people/{slug}','HomePageController@peopleDetails')->name('people');


// Admin part
Route::namespace('Admin')->group(function() {
    Route::get('admin','AdminLoginController@showLoginForm')->name('admin');
    Route::post('admin-login','AdminLoginController@adminLogin')->name('admin-login');
    Route::as('admin.')->group(function() {
        Route::get('profile','BasicController@profile')->name('profile');
        Route::get('dashboard','DashboardController@dashboard')->name('dashboard');

        Route::resource('sliders','SliderController');
        Route::resource('news-categories','NewsCategoryController');
        Route::resource('news','NewsController');
        Route::resource('departments','DepartmentController');
        Route::resource('people-directories','PeopleDirectoryController');
        Route::resource('service-categories','ServiceCategoryController');
        Route::resource('service-subcategories','ServiceSubcategoryController');
        Route::resource('services','ServiceController');

        Route::get('website-settings','BasicController@websiteSettings')->name('website-settings');
        Route::put('update-website-settings','BasicController@updateWebsiteSettings')->name('update-website-settings');

        Route::get('logout',function() {
            Auth::logout();
            Session::reflash();
            return redirect()->route('admin');
        })->name('logout');
    });
});
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

Route::get('our-services','HomePageController@allServices')->name('our-services');
Route::get('service-details/{slug}','HomePageController@serviceDetails')->name('service-details');

Route::get('all-publications','HomePageController@allPublications')->name('all-publications');
Route::get('publication-details/{slug}','HomePageController@publicationDetails')->name('publication-details');

Route::get('about','HomePageController@aboutUs')->name('about');
Route::get('contact','HomePageController@contactUs')->name('contact');
Route::post('send-contact-message','HomePageController@storeMessage')->name('send-contact-message');
Route::get('search','HomePageController@searchContent')->name('search-content');


// Admin part
Route::namespace('Admin')->group(function() {
    Route::get('admin','AdminLoginController@showLoginForm')->name('admin');
    Route::post('admin-login','AdminLoginController@adminLogin')->name('admin-login');
    Route::as('admin.')->middleware('auth')->group(function() {
        Route::get('profile','BasicController@profile')->name('profile');
        Route::get('dashboard','DashboardController@dashboard')->name('dashboard');

        Route::resource('sliders','SliderController');
        Route::resource('publication-categories','PublicationCategoryController');
        Route::resource('publications','PublicationController');
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
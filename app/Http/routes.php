<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/editprofile', 'UserController@editProfile');
Route::get('home', 'HomeController@index');



// Routes for listing

Route::get('listings', 'ListingController@index');

Route::get('create', 'ListingController@create');

Route::post('create', 'ListingController@store');
	
Route::get('/listings/{listing}/edit', 'ListingController@edit');

Route::patch('/listings/{listing}', 'ListingController@update');

Route::get('/listings/{listing}/delete', 'ListingController@delete');

Route::get('/listings/{listing}/view_post', 'ListingController@viewPost');



// Routes for the admin
Route::get('admin','AdminController@index');

Route::post('admin','AdminController@AddCateg');

Route::get('/admin/category/{category}/delete', 'AdminController@deleteCateg');

Route::get('/admin/location/{locations}/delete', 'AdminController@deleteLocal');

Route::get('/admin/pricing_rate/{pricing_rate}/delete', 'AdminController@deletePrice_rate');


Route::post('/admin/add_location','AdminController@AddLocation');

Route::post('admin/add_pricing_rate','AdminController@AddPricing_rate');

Route::get('myListings','ListingController@myListing');













































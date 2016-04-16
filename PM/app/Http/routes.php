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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('about','AboutController@showAboutController');
Route::get('category','CategoryController@showCategoryController');
Route::get('contact','CustomersController@create');
Route::resource('contact','CustomersController');
Route::controller('contact','CustomersController');
Route::get('gallery','GalleryController@showGalleryController');
Route::get('/','IndexController@showIndexController');
Route::get('services','ServicesController@showServicesController');
Route::get('index','IndexController@showIndexController');




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

Route::get('cities', 'CitiesController@index');
Route::get('cities/create', 'CitiesController@create');
Route::get('citizens', 'CitizensController@index');
Route::get('citizens/create', 'CitizensController@create');
Route::get('friends', 'FriendsController@index');
Route::get('friends/create', 'FriendsController@create');
Route::get('helpline', 'HelplinesController@index');
Route::get('helpline/create', 'HelplinesController@create');
Route::get('infobulletins', 'InfoBulletinsController@index');
Route::get('infobulletins/create', 'InfoBulletinsController@create');
Route::get('locationrecords', 'LocationRecordsController@index');
Route::get('locationrecords', 'LocationRecordsController@create');
Route::get('shelters', 'SheltersController@index');
Route::get('shelters/create', 'SheltersController@create');
Route::get('provinces', 'ProvincesController@index');
Route::get('provinces/create', 'ProvincesController@create');
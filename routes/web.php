<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'LunchController@Index');
Route::get('/RandomLunch', 'LunchController@RandomLunch');
Route::get('/Create', 'LunchController@Create');
Route::post('/Update', 'LunchController@Update');
Route::get('/ShowAllData', 'LunchController@ShowAllData');
Route::post('/PartRandom', 'LunchController@PartRandom');
Route::get('/Information', 'LunchController@Information');
Route::get('/Edit', 'LunchController@Edit');
Route::post('/EditResult', 'LunchController@EditResult');
Route::get('/Delete', 'LunchController@Delete');
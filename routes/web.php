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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/user/home', 'UserController@index')->name('users.index');
    Route::post('/shifts', 'ShiftController@setEvents');
    Route::get('/admin/home', 'ManagerController@index')->name('manager.index');

    Route::group(['middleware' => ['loginUserCheck:manager']], function() {
       Route::get('/admin/home', 'ManagerController@index')->name('manager.index');
       Route::get('/home', 'HomeController@index');
    });

    Route::group(['middleware' => ['loginUserCheck:user']], function() {
        Route::get('/user/home', 'UserController@index')->name('users.index');
    });
});

Route::get('/api/shifts', 'Api\ShiftController@index');
Route::post('/api/addEvent', 'Api\ShiftController@addEvent');

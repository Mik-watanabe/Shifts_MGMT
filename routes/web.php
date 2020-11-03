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

    Route::group(['middleware' => ['loginUserCheck:manager']], function() {
       Route::get('/admin/home', 'ManagerController@index')->name('manager.index');
       Route::get('/home', 'HomeController@index');
    });

    Route::group(['middleware' => ['loginUserCheck:user']], function() {
        Route::get('/user/home', 'UserController@index')->name('users.index');
    });
    Route::group(['prefix' => "api", 'namespace' => 'Api'], function() {
        Route::get('/shifts', 'ShiftController@index');
        Route::post('/addEvent', 'ShiftController@addEvent');
        Route::get('/manager', 'ManagerController@showShifts'); 
        Route::post('/deleteShift', 'ShiftController@deleteShift');  
    });

    Route::get('/user/create', 'UserCreateController@createUser');
    Route::post('/send', 'UserCreateController@send')->name('user.create'); 
    Route::get('/invalid', 'UserCreateController@invalid')->name('invalid');
});

Route::get('/user/register', 'UserCreateController@register')->name('user.register');

Route::get('/admin/user-color', 'ManagerController@showUserColor');
Route::post('/admin/user-color', 'ManagerController@updateUserColor')->name('admin.user-color.update');
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

Route::get('/', 'Site\HomeController@index');

Route::prefix('paniel')->group(function(){
    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('login', 'Admin\Auth\LoginController@index')->name('admin');
    Route::post('login', 'Admin\Auth\LoginController@authenticate');

    Route::get('register','Admin\Auth\LoginController@index')->name('register');
    Route::post('register','Admin\Auth\LoginController@register');

    Route::post('login', 'Admin\Auth\loginController@logout')->name('logout');


    Route::resource('users', 'Admin\UserController');

    Route::get('profile', 'Admin\ProfileController@index')->name('profile');
    Route::put('profilesave', 'Admin\ProfileController@save')->name('profile.save');

    Route::get('settings', 'Admin\SettingController@index')->name('settings');
    Route::put('settingsave', 'Admin\SettingController@save')->name('settings.save');

});

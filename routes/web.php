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

//Localization
Route::get('changeLanguage/{locale}', function ($locale) {
    App::setLocale($locale);
    error_log('Some message here.');
});

//test 
Route::get('/hello/{value}', function ($value) {
    App::setLocale($value);
    error_log('Some message here.');
    if (App::isLocale('en')) {
        return view('/test/test', ['name' => 'English']);
    }else if (App::isLocale('th')) {
        return view('/test/test', ['name' => 'Thai']);
    }
    
});

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('management.user.home');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');

//admin route for our multi-auth system

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});


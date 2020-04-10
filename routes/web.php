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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('refresh_captcha','HomeController@refreshCaptcha')->name('refresh_captcha');
Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
 Route::get('/admin','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
});


Route::get('/adminDashboard','AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
Route::get('/admin','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/adminlogin','Admin\DashboardController@registered')->name('employee.list')->middleware('auth:admin');
Route::post('/userNominee','Admin\DashboardController@userData')->name('nominate.user');
Route::get('/nominate','Admin\adminController@nominated')->name('withRole')->middleware('auth:admin');
Route::resource('biodata','biodataController')->middleware('auth:admin');
Route::post('/withAddRole','Admin\adminController@dataRole')->name('role.list')->middleware('auth:admin');
Route::post('/forNominated','Admin\adminController@goForNominated')->name('forNomination')->middleware('auth:admin');
Route::get('/nominatedUser','Admin\adminController@nominatedUser')->middleware('auth:admin');
Route::post('/voted','HomeController@voteForGuys')->name('voteForNominated');
Route::get('/voting-list','Admin\adminController@votingList')->name('vts')->middleware('auth:admin');
Route::get('/result','Admin\adminController@resultOfVoting');
Route::get('/delete/{id}','Admin\adminController@destroy')->name('admin.destroy')->middleware('auth:admin');
Route::get('/remove/{id}','Admin\adminController@deleteVoter')->name('admin.remove')->middleware('auth:admin');
Route::get('/getpdf','Admin\adminController@getPDF')->middleware('auth:admin');
Route::get('/logout','Auth\AdminLoginController@postLogout')->name('admin.logout')->middleware('auth:admin');


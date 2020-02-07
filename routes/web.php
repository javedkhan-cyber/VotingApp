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

Route::get('/adminlogin','Admin\DashboardController@index');
Route::post('/checklogin','Admin\DashboardController@checkLogin')->name('admin-login');

Route::get('/admin','Admin\DashboardController@registered')->name('employee.list');
Route::post('/userNominee','Admin\DashboardController@userData')->name('nominate.user');
Route::get('/nominate','Admin\adminController@nominated')->name('withRole');
Route::resource('biodata','biodataController');
Route::post('/withAddRole','Admin\adminController@dataRole')->name('role.list');
Route::post('/forNominated','Admin\adminController@goForNominated')->name('forNomination');
Route::get('/nominatedUser','Admin\adminController@nominatedUser');
Route::post('/voted','HomeController@voteForGuys')->name('voteForNominated');
Route::get('/voting-list','Admin\adminController@votingList');



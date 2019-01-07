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

Route::group(['prefix' => 'admin/'], function (){
    Route::resource('user', 'admin\Users' );
    Route::post('user/update', 'admin\Users@update')->name('user.edit');
    Route::resource('search', 'admin\Search');
});

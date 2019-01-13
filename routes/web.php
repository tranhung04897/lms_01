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
Route::get('/locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::group(['prefix' => 'admin/'], function (){
    Route::resource('user', 'admin\Users' );
    Route::post('user/update', 'admin\Users@update')->name('user.edit');
    Route::resource('search', 'admin\Search');
});

Route::group(['prefix' => '/'], function (){
    Route::resource('home', 'Home' );
    Route::resource('category', 'Cat');
    Route::resource('detail', 'Detail');
    Route::resource('login', 'Authen\Login');
    Route::resource('register', 'Authen\Register');
    //Route::post('home/register', 'admin\Users@update')->name('user.edit');
});

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

Route::get('/admin', [
    'uses'=>'admins\AdminController@index',
    'as'=>'admin.index',
]);
Route::get('/admin/user', [
    'uses'=>'admins\UserController@index',
    'as'=>'admin.users.index',
]);
Route::post('/admin/user', [
    'uses'=>'admins\UserController@add',
    'as'=>'admin.users.index',
]);
Route::post('/admin/user', [
    'uses'=>'admins\UserController@edit',
    'as'=>'admin.users.edit',
]);
Route::delete('/admin/user-del-{id}', [
    'uses'=>'admins\UserController@destroy',
    'as'=>'admin.users.destroy',
]);

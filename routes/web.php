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

Route::get('/login','AuthController@show')->name('login');

Route::post('/login','AuthController@login');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard','DashboardController@index');
	Route::get('/message/all','DashboardController@message');
	Route::get('/portofolio/all','DashboardController@portofolio');
	//blog
	Route::get('/blog/all','DashboardController@blog');
	Route::post('/blog/addnew','BlogController@addnew');
	Route::delete('/blog/delete/{id}','BlogController@destroy')->name('blog.destroy');
	Route::patch('/blog/{id}/update','BlogController@edit');
});

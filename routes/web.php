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
Auth::routes();


Route::middleware('checkadmin')->group(function () {
	Route::get('', 'StudentController@index');
	Route::prefix('student')->group(function() {
		Route::post('add','StudentController@addStudent');
		Route::delete('{id}', 'StudentController@destroy');
		Route::put('{id}', 'StudentController@edit');
		Route::get('{id}', 'StudentController@infor');
		Route::post('{id}/upload-image', 'StudentController@uploadImage')->name('upload');
	});
	Route::get('load-more', 'StudentController@loadDataAjax');
});
Route::prefix('admin')->group(function(){
	Route::get('login', 'AdminController@index');
	Route::post('login', 'AdminController@login');

	Route::get('logout', 'AdminController@logout');
	Route::get('signup', 'AdminController@signup');	
});

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
		Route::get('/search/{data}', 'StudentController@searchLive');
	});
	Route::get('load-more', 'StudentController@loadDataAjax');

	Route::prefix('class')->group(function(){
		Route::get('', 'ClassController@index');
		Route::post('add', 'ClassController@addClass');
		Route::get('print_pdf', 'ClassController@printPDF');
	});

	Route::prefix('point')->group(function(){
		Route::get('', 'PointController@index');
	});	
});
Route::prefix('admin')->group(function(){
	Route::get('login', 'AdminController@index')->name('login');
	Route::post('login', 'AdminController@login');

	Route::get('logout', 'AdminController@logout')->name('logout');
	Route::get('signup', 'AdminController@signup');	
	Route::post('signup', 'AdminController@doSignup');

	Route::get('facebook', 'AdminController@redirectToGoodle');
});

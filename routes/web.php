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

Route::resource('projects','ProjectController')->middleware('auth');;

//Route::get('projects','ProjectController@index');
//Route::post('projects','ProjectController@store');
//Route::get('projects/create','ProjectController@create')->middleware('permission:edit role');
//Route::get('projects/{project}','ProjectController@show')->middleware('role:admin');
//Route::put('projects/{project}','ProjectController@update');
//Route::get('projects/{project}','ProjectController@destroy');
//Route::get('projects/{project}/edit','ProjectController@edit');


Route::get('/users', 'UserController@index');
Route::get('/status/update', 'UserController@updateStatus')->name('users.update.status');

//
//Route::resource('projects','ProjectController')->middleware('auth');;
//Route::resource('projects','ProjectController')->middleware('auth');;
//Route::resource('projects','ProjectController')->middleware('auth');;
//Route::resource('projects','ProjectController')->middleware('auth');;
//Route::resource('projects','ProjectController')->middleware('auth');;
//Route::resource('projects','ProjectController')->middleware('auth');;

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index','SearchController@search')->middleware('role:admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

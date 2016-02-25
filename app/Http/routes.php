<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


/*
|--------------------------------------------------------------------------
| API REST 
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'v1'], function(){
	Route::resource('user', 'UserController',
		['only' => ['index','store','update','destroy','show']]);
});

Route::group(['prefix' => 'v2'], function(){
	Route::resource('user', 'UserController',
		['only' => ['index','store','update','destroy','show']]);
	Route::get('users/names', 'UserController@names');
});



//http://localhost/apirest/public/v1/user
//name , email. password
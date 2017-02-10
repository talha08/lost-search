<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return Redirect::route('index');
});
Route::get('/', array('as' => 'index', 'uses' => 'Auth\AuthController@index'));

Route::group(['middleware' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::get('user/create', ['as'=>'user.create','uses' => 'UsersController@create']);
	Route::post('user/store', ['as'=>'user.store','uses' => 'UsersController@store']);
	Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));


	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);

});



Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));






    //found section
	Route::get('found/all', array('as' => 'found.all', 'uses' => 'FoundController@allPost')); // admin
	Route::get('found/mypost', array('as' => 'found.mypost', 'uses' => 'FoundController@mypost')); //admin, auth

	Route::get('found/', array('as' => 'found.index', 'uses' => 'FoundController@index'));


	Route::get('found/create', array('as' => 'found.create', 'uses' => 'FoundController@create'));
	Route::post('found', array('as' => 'found.store', 'uses' => 'FoundController@store'));
	Route::get('found/{id}/edit', array('as' => 'found.edit', 'uses' => 'FoundController@edit'));
	Route::put('found/{id}/update', array('as' => 'found.update', 'uses' => 'FoundController@update'));
	Route::get('found/{id}/show', array('as' => 'found.show', 'uses' => 'FoundController@show'));
	Route::delete('found/{id}', array('as' => 'found.delete', 'uses' => 'FoundController@destroy'));







});





Route::get('profile1',function(){
	return View::make('template.profile')->with('title','Profile');
});


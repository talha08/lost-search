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

//all post
Route::get('post/', array('as' => 'post.index', 'uses' => 'PostController@index'));
//search
Route::get('post/search', array('as' => 'foundSearch', 'uses' => 'PostController@foundSearch'));
Route::get('post/advanced/search', array('as' => 'foundAdvancedSearch', 'uses' => 'PostController@foundAdvancedSearch'));
//lost and found post
Route::get('post/lostPost', array('as' => 'allLostPost', 'uses' => 'PostController@lostPost'));
Route::get('post/foundPost', array('as' => 'allFoundPost', 'uses' => 'PostController@foundPost'));
Route::get('post/{id}/show', array('as' => 'post.show', 'uses' => 'PostController@show'));



Route::group(array('middleware' => 'auth'), function()
{
	//user section
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));

    //found section
	Route::get('post/all', array('as' => 'post.all', 'uses' => 'PostController@allPost')); // admin
	Route::get('post/mypost', array('as' => 'post.mypost', 'uses' => 'PostController@mypost')); //admin, auth

	//post section
	Route::get('post/create', array('as' => 'post.create', 'uses' => 'PostController@create'));
	Route::post('post', array('as' => 'post.store', 'uses' => 'PostController@store'));
	Route::get('post/{id}/edit', array('as' => 'post.edit', 'uses' => 'PostController@edit'));
	Route::put('post/{id}/update', array('as' => 'post.update', 'uses' => 'PostController@update'));
	Route::delete('post/{id}', array('as' => 'post.delete', 'uses' => 'PostController@destroy'));
});





Route::get('profile1',function(){
	return View::make('template.profile')->with('title','Profile');
});


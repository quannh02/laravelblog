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
    return view('welcome');
});
//Route::group(['namespace' => 'Auth'], function()
//{
//	Route::group(['prefix'=> 'admin'], function(){
//	    Route::get('login', 	['as' 	=> 'admin.getLogin', 'uses' 	=> 'AuthController@getLogin']);
//	    Route::post('login', 	['as' 	=> 'admin.postLogin' , 'uses'	=> 'AuthController@postLogin']);
//
//	    Route::get('logout',  	['as' 	=>  'admin.logout',  'uses' 	=> 'AuthController@getLogout']);
//	});
//});

Route::group(['namespace' => 'backend'], function(){
	Route::group(['prefix' => 'auth'], function () {
		Route::get('login', ['as' => 'backend.getLogin', 'uses' => 'AuthController@getLogin']);
		Route::post('login', 'AuthController@postLogin');
		Route::get('register', ['as' => 'backend.getRegister', 'uses' => 'AuthController@getRegister']);
		Route::post('register', 'AuthController@postRegister');
		Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);
		});
	Route::group(['middleware'=> 'auth'],function(){
		Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'AuthController@dashboard']);
		Route::get('profile/{id}',['as' => 'backend.getProfile', 'uses' =>  'AuthController@getProfile']);
		Route::post('profile/{id}', ['as' => 'backend.postProfile', 'uses' => 'AuthController@postProfile']);
		Route::get('list/car', ['as' => 'listCarforRent', 'uses' => 'BookingController@getListCar']);
		Route::post('list/car', 'BookingController@postListCar');
		Route::get('datxe', 'BookingController@getDatXe');
		Route::get('danhsachxe', 'CarsController@getAllCars');
	});
	
	Route::group(['middleware' => ['admin', 'auth']], function(){
		Route::get('user/list', ['as' => 'user.index', 'uses' => 'UserController@index']);
		Route::get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
		Route::get('user/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
		Route::post('user/{id}/destroy' , ['as' => 'user.destroy' , 'uses' => 'UserController@destroy']);
		Route::post('user/update', ['as' => 'user.update',  'uses' => 'UserController@update']);
		Route::post('user/create', ['as' => 'user.store', 'uses' => 'UserController@store']);
		Route::get('upload', ['as' => 'upload.get', 'uses' => 'UserController@upload']);
		Route::post('upload', ['as' => 'upload.post', 'uses' => 'UserController@postupload']);
		Route::get('cars/new', ['as' => 'themxe' , 'uses' => 'CarsController@create']);
		Route::post('cars/new', 'CarsController@store');
		// Route::resource('user', 'UserController');
	});
});
Route::group(['namespace' => 'frontend'], function(){
	Route::get('trangchu', 'HomeController@index');
	Route::post('tinh/{id}', 'HomeController@returnDiaDanh');
	Route::get('chitiet', 'HomeController@getChiTiet');
	Route::post('votes/{id}', 'HomeController@postVote');
	Route::any('/search', 'HomeController@search');
});



//Route::resource('user', 'UserController');
// Route::get('user/{user}', function(App\User $user){
// 	return view('admin.user.show')->with('user', $user);
// });
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

Route::group(['namespace' => 'Auth'], function(){
		Route::group(['prefix' => 'auth'], function () {
			Route::get('login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
			Route::post('login', 'AuthController@postLogin');
			Route::get('register', ['as' => 'register', 'uses' => 'AuthController@getRegister']);
			Route::post('register', 'AuthController@postRegister');
			Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);
		});
	Route::get('dashboard', ['middleware' => 'auth','uses'	=> 'AuthController@dashboard']);
});
//Route::resource('user', 'UserController');
Route::group(['middleware' => 'admin'], function()
{
	Route::resource('user', 'UserController');
});
Route::get('tai-khoan/quen-mat-khau','Auth\PasswordController@lostPass');
Route::get('test', ['as' => 'homeview', 'uses' => 'HomeController@index']);
Route::get('loai-san-pham/{id}/{tenloai}', ['as' => 'loaisanpham', 'uses' => 'HomeController@loaisanpham']);
Route::get('viewtest', function(){
	return view('user.pages.home');
});
Route::get('user/{user}', function(App\User $user){
	return view('admin.user.show')->with('user', $user);
});

Route::get('mua-hang/{id}/{tensanpham}', ['as' => 'muahang', 'uses' => 'HomeController@muahang']);
Route::get('gio-hang', ['as' =>  'giohang', 'uses' => 'HomeController@giohang']);
Route::get('xoa-san-pham/{id}',  ['as' => 'xoasanpham', 'uses' => 'HomeController@xoahang']);
Route::get('cap-nhat/{id}/{qty}', ['as'=> 'capnhat', 'uses' => 'HomeController@capnhat']);
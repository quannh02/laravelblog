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
		
		Route::get('searchdsxe', 'CarsController@searchdsxe');

		Route::get('datxe', ['as'=>'getdatxe', 'uses'=> 'BookingController@getDatXe']);
		Route::post('datxe', 'BookingController@postDatXe');
		Route::get('quanlydondat', 'BookingController@quanlydondat');
		Route::get('danhsachxe', ['as' => 'danhsachxe', 'uses' => 'CarsController@getAllCars']);
		Route::get('showtaixe/{id}', 'TaiXeController@showTaixe');
	});
	
	Route::group(['middleware' => ['auth', 'admin']], function(){
		
		Route::get('user/list', ['as' => 'user.index', 'uses' => 'UserController@index']);
		Route::get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
		Route::get('user/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
		Route::post('user/{id}/destroy' , ['as' => 'user.destroy' , 'uses' => 'UserController@destroy']);
		Route::post('user/update/{id}', ['as' => 'user.update',  'uses' => 'UserController@update']);
		Route::post('user/create', ['as' => 'user.store', 'uses' => 'UserController@store']);
		
		Route::get('cars/new', ['as' => 'themxe' , 'uses' => 'CarsController@create']);
		Route::post('cars/new', 'CarsController@store');
		Route::post('cars/destroy/{id}', ['as' => 'xoaxe', 'uses' => 'CarsController@delete']);
		Route::get('cars/edit/{id}' , ['as' => 'suaxe', 'uses' => 'CarsController@edit']);
		Route::post('cars/update/{id}', 'CarsController@update');
		
		Route::get('themtintuc', ['as' => 'themtintuc', 'uses' => 'TinTucController@themTinTuc']);
		Route::post('themtintuc/{id}', 'TinTucController@postTinTuc');
		Route::get('tintuc/edit/{id}', ['as' => 'suatintuc', 'uses' => 'TinTucController@edit']);
		Route::post('tintuc/update/{id}', 'TinTucController@update');
		Route::get('quanlytintuc', ['as' => 'quanlytintuc' ,'uses' => 'TinTucController@getAllTinTuc']);
		Route::post('tintuc/destroy/{id}', 'TinTucController@destroy');
		
		Route::get('dstaixe', ['as'=> 'dstaixe', 'uses' => 'TaiXeController@dstaixe']);
		Route::get('suataixe/{id}', 'TaiXeController@suataixe');
		Route::post('suataixe/{id}', 'TaiXeController@postTaixe');
		Route::get('themtaixe', 'TaiXeController@themtaixe');
		Route::post('themtaixe', 'TaiXeController@postthemtaixe');
		Route::post('xoataixe/{id}', 'TaiXeController@xoataixe');
		// Route::resource('user', 'UserController');
		

		Route::get('quanlydatxe', 'BookingController@admindondat');
		Route::post('duyetdondat/{id}', 'BookingController@duyetdondat');
		Route::get('chitietnguoidung/{id}', 'BookingController@chitietnguoidung');

		Route::get('danhmuc', 'DanhMucController@danhmuc');
		Route::get('suadanhmuc/{id}', 'DanhMucController@getsuadanhmuc');
		Route::post('suadanhmuc/{id}', 'DanhMucController@postsuadanhmuc');
		Route::get('themdanhmuc', 'DanhMucController@getthemdanhmuc');
		Route::post('themdanhmuc', 'DanhMucController@postthemdanhmuc');
		Route::post('xoadanhmuc/{id}', 'DanhMucController@xoadanhmuc');
	});
});
Route::group(['namespace' => 'frontend'], function(){
	Route::get('trangchu', 'CarsController@index');

	Route::get('chitiet/{id}', ['as' => 'chitietsp' , 'uses' => 'CarsController@getChiTiet']);

	Route::post('votes/{id}', 'CarsController@postVote');

	Route::any('/search', 'CarsController@search');

	Route::get('tintuc', 'TinTucController@getTinTuc');
	Route::get('chitiettintuc/{id}', 'TinTucController@chitiettintuc');

	Route::post('binhluan/{id}/{xe_id}', 'BinhLuanController@binhluan');

	Route::get('brand/{id}', 'CarsController@brandforitem');
	Route::get('socho/{id}', 'CarsController@socho');

	Route::get('gioxe/{id}', 'CarsController@themgioxe');
	Route::get('gioxe','CarsController@getgioxe');
	Route::post('huyxe', 'CarsController@deletegioXe');

	Route::get('banggia', 'CarsController@bangGia');
	Route::get('welcome/{locale}', function ($locale) {
        App::setLocale($locale);
    	return redirect('trangchu');
	});
	Route::get('cacbuocthuexe', 'CarsController@cacbuocthuexe');
});




//Route::resource('user', 'UserController');
// Route::get('user/{user}', function(App\User $user){
// 	return view('admin.user.show')->with('user', $user);
// });
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

//域名/index.php/模块/控制器/方法
/*Route::get('/',function () {
	return 'hello ';
});

Route::get('test', function () {
	return 'test';
});

Route::match(['get','post'],'admin/login',function(){
	return 'login';
});
//路由传参
Route::get('Home/user/{id}',function($id){
	return 'user' . $id;
});

Route::get('Home/user/{id}/{name}',function($id,$name){
	return 'user'.$id.$name;
});

//传递可选参数
Route::get('goods/{page?}',function($page = 1){
	return 'page'.$page;
});

Route::get('user/{name}',function($name){
	return 'user'.$name;
})->where('name','[A-Za-z]*');*/

Route::get('test','MsgController@test');
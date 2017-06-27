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
// 类。请求方式 
Route::get('/', function ()
{
	// view , 解析模板
    	// return view('welcome');
	// 什么都不想做看你一晚上
    	return 'Don not want to do anything for a night';
});

Route::get('/mytest',function()
{
	// 看着你 看着你
	return 'Watch you look at you ';
});

Route::get('/form',function()
{
	return view('form');
});

Route::post('/test',function()
{	
	// 你总是那么优秀
	return 'You are always so good Bian ';
});

Route::put('/myput',function()
{	
	// 你总是那么不容易让人靠近
	return 'You are always so hard to get close to ';
});

Route::delete('/mydelete',function()
{
	return 'You know, I feel lost when you ignore me ';
});

// Route::get('/php',function()
// {
// 	return '这是GETphp';
// });

// Route::post('/php',function()
// {
// 	return '这是POSTphp';
// });

Route::match(['get','post'], '/php',function()
{
	return '这是GET+POST请求';
});

Route::any('/myany',function()
{
	return '这是所有请求';
});

// 路由参数，可以定义多个，?号代表可选参数可选参数要给定默认值，否则会报错 $id=43,$name="bian" 定义了给定参数默认值
Route::get('user/{rrrrrid}',function($id)
{
	return 'user-'.$id;
});
Route::get('/news/{id?}/{name?}',function($id=43,$name="bian")
{
 	return $id."<br>".$name;
 	// return ;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']); // 路由参数约束 正则表达式

// 普通控制器
// Route::get('/mycontro', "TestController@index");
// Route::get('/home/mycontro','Home\TestController@index');// \是命名空间 创建的时候用/

// Route::get('/user/add','UserController@add');
// Route::get('/user/insert','UserController@insert');
// Route::get('/user/add','UserController@add');
// Route::get('/user/add','UserController@add');
// Route::get('/user/add','UserController@add');

// 资源控制器
// Route::resource('/stu','StuController');

// 仅仅要index和show别的都访问不了
// Route::resource('/stu','StuController',['only' => [
    // 'index', 'show'
// ]]);

// Route::get('/myfunc ','StuController@myfunc');

// 路由别名
// Route::get('/user/member',['as'=>'center',function()
// {
	// return 'member';
// }]);

// Route::get('/user/member',['as'=>'center',function()
// {
// 	return route('center');
// }]);

// 路由群组
// 通过路由组数组属性中的prefix键可给路由组中的路由加上指定的URI前缀
// 在浏览器地址栏中输入zfbna.com/admin/users  就会输出hello bian
// Route::group(['prefix'=>'admin'], function(){
// 	Route::get('users',function(){
// 		return 'hello bian ';
// 	});
// });

// 请求
Route::get('/request/add', "Admin\RequestController@add");
Route::post('/request/insert','Admin\RequestController@insert');
Route::get('/response','Admin\RequestController@response');

// 中间件
// Route::post('/login','Admin\RequestController@login') ->middleware('login');

// 视图
Route::get('/view',function()
{
	return view('view')->with('name', '不开心');
});

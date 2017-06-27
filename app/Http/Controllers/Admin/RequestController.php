<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
	public function add()
	{
		return view('request.form');
	}

    	//
    	public function insert(Request $request)
    	{
    		// 第一种方法
    		// $name = $request -> input('name');
    		// 第二种方法
    		// $name = \Request::input('name');

    		// $age = $request -> input('age');

    		// 获取请求的路由规则
    		// $path = $request -> path();
    		// return $path;

    		// is 验证判断是不是在这个规则里来的
    		// 不能在路由规则前加斜杠 *为通配符
    		// $res = $request -> is('request/insert');
    		// $res = $request -> is('request/*');
    		// url
		// $url = $request -> url();
    		// 获取带参数的URL

    		// method
    		// $method = $request -> method();
    		// $method = $request -> isMethod('post');
    		// $method = $request -> isMethod('get');

    		// 获取所有数据
    		// $res = $request -> all();
    		// $name = $request -> input('bian','na');

    		// 成员属性
    		// $res = $request -> name;

    		// 只获取指定字段
    		// $res = $request ->only('name','age');
    		// $res = $request -> only(['name','age']);

    		// 除了指定字段
    		// $res = $request -> except(['name','age']);
    		// $res = $request -> except(['_token']);

    		// 检测指定字段是否为空
    		// if($request -> has('name'))
    		// {
    		// 	return 1111;
    		// }else
    		// {
    		// 	return 2222;
    		// }

    		// 提交完成之后数据还会保存_缓存所有 但是要在表单中展示出来（闪存）
    		// $request -> flash();

    		// 缓存指定字段值
    		// $request -> flashOnly(['name','age']);

    		// 除了指定字段值其余都缓存
    		// $request -> flashExcept('name');
    		// 提交完成之后跳到指定页面
    		// return redirect('/request/add');

    		// 两步变成一步 缓存所有、跳到指定页面
    		// return redirect('/request/add')->withInput();
    		// return redirect('/request/add')->withInput($request->except('name'));
    		// return redirect('/request/add')->withInput($request->only('name'));		

    		// return $res;
    		// dd($res);

    		// 存cookie值时会自动加密 取的时候会自动解密
    		// cookie的生成方式
    		// return response('Hello Bian')->cookie('name','bian',10); 
    		// $res = $request -> cookie('name');
    		// dd($res);

    		// 更简单的cookie生成方式
    		// \Cookie::queue('sex',18,10);
    		// $res = $request -> cookie('age');
    		// dd($res);

    		// 获取上传文件
    		$file = $request -> file('img');
    		// dd($file); 

    		// // 获取文件的扩展名猜的
    		$extension = $request->file('img')->extension();
    		// 获取文件的扩展名正确的
    		$extension = $request->file('img')->getClientOriginalExtension();
    		// dd($extension);

    		// 定义上传的文件放到指定的文件目录中
    		$filename = time().'.'.$extension;

    		// 上传到指定文件夹
    		// ./ 代表入口文件目录.就在publicl里
    		$request -> file('img') -> move('./uploads',$filename);
    	
    		// back于redirect效果一样-从 哪里来回哪里去withInput（闪存）
    		// return back()->withInput();
    		return redirect('/request/add')->with('status', 'Profile updated!');
    	}

    	// 响应
    	public function response(Request $request)
    	{
    		// \Cookie::queue('name','cui',10);

    		// 响应模板1
    		// return view();
    		// 响应模板2
    		// return response() -> view();

  //   		return response()->json([
  //   			'name' => 'Abigail',
  //   			'state' => 'CA'
		// ]);

    		// 访问后文件就会下载
    		$pathToFile = './uploads/1498489823.jpg'; // 文件绝对路径
    		return response()->download($pathToFile);// 下载方法
    	}

    	// 中间件方法
    	public function login()
    	{
    		return '登录成功';
    	}
}
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>post请求表单</title>
</head>
<body>

	<h1>POST</h1>
	<hr>
	<form action="/test" method="post">
		{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>PUT</h1>
	<hr>
	<form action="/myput" method="post">
		{{--<input type="hidden" name="_method" value="PUT"> --}}
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>DELETE</h1>
	<hr>
	<form action="/mydelete" method="post">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>GET+POST-post</h1>
	<hr>
	<form action="/php" method="post">
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>GET+POST-get</h1>
	<hr>
	<form action="/php" method="get">
		
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>资源控制器</h1>
	<hr>
	<form action="/stu" method="post">
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>资源控制器PUT</h1>
	<hr>
	<form action="/stu/1" method="post">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>

	<h1>资源控制器DELETE</h1>
	<hr>
	<form action="/stu/1" method="post">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<input type="text" name="name"><br>
		<button>提交</button>
	</form>
</body>
</html>
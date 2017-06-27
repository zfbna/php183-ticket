<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	{{ session('status') }}
	<form action="/request/insert?a=1&b=2" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="text" name="name" value="{{ old('name') }}"><br>		
		<input type="text" name="age" value="{{ old('age') }}"><br>
		<input type="text" name="height" value="{{ old('height') }}"><br>
		<input type="text" name="sex" value="{{ old('sex') }}"><br>
		<input type="file" name="img"><br>
		<button>添加</button>
	</form>

	<form action="/login" method="POST" enctype="multipart/form-data">
		<input type="text" name="age" value="{{ old('age') }}"><br>
		{{ csrf_field() }}
		<button>登录</button>
	</form>
</body>
</html>
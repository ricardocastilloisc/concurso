<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'My laravel Store')</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')
	
</body>
</html>

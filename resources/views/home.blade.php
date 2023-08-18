<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@auth
		<a href="#">{{ auth()->user()->username }}</a>
		<a href="{{ route('logout') }}">Log out</a>
		<a href="{{ route('product') }}">Products</a>
	@endauth
	@guest
		<a href="{{ route('login') }}">Log in</a>
		<a href="{{ route('register') }}">Register</a>
	@endguest
</body>
</html>
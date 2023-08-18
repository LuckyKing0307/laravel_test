<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@if(session('error'))
		<div class="alert"> {{session('error')}} </div>
	@endif
	<form action="{{ route('login') }}" method="post">
		@csrf
        <div class="form-group">
        	<label for="username">Username</label>
        	<input type="text" name="username" id="username" value="{{ old('username') }}">
        </div> 
        <div class="form-group">
        	<label for="password">Password</label>
        	<input type="password" name="password" id="password">
        </div> 
        <div class="form-group">
        	<button type="submit">Enter</button>
        </div> 
	</form>
</body>
</html>
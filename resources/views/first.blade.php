<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>My First Laravel Page 👋</h1>
	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, voluptates?</p>
	<p class="bigger-text">
		Looking for the
		<a href="/second">second route</a>
		?
	</p>
</body>

</html>
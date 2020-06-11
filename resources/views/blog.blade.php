<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$name}} Blog's</title>
</head>
<body>
	<h3>How to make blog with laravel framework </h3>
	<p>This is simple blog's page from {{$name}}.</p>
	@foreach ($hobbies as $hb)
		<li>{{$hb}}</li>
	@endforeach
	<br>
	@foreach ($programming as $pg)
		<li>{{$pg}}</li>
	@endforeach
</body>
</html>
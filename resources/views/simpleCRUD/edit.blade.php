<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/staff"> Kembali</a>
	
	<br/>
	<br/>
	@foreach($staff as $s)
	<form action="/staff/processedit" method="post">
		{{ csrf_field() }}
			<input type="hidden" name='id' value="{{$s->id}}">
			name <input type="text" name="name" required="required" value="{{$s->name}}"> <br/>
			position <input type="text" name="position" required="required" value="{{$s->position}}"> <br/>
			age <input type="number" name="age" required="required" value="{{$s->age}}"> <br/>
			address <textarea name="address" required="required">{{$s->address}}</textarea> <br/>
			<input type="submit" value="Save Data">
	</form>
	@endforeach
 
</body>
</html>
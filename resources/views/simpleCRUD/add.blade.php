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
 
	<form action="/staff/processadd" method="post">
		{{ csrf_field() }}
		name <input type="text" name="name" required="required"> <br/>
		position <input type="text" name="position" required="required"> <br/>
		age <input type="number" name="age" required="required"> <br/>
		address <textarea name="address" required="required"></textarea> <br/>
		<input type="submit" value="Save Data">
	</form>
 
</body>
</html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
 
	<h2 class="text-center">www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/staff/add"> + Tambah Pegawai Baru</a>
	
	<br/>
	
	<p>Cari Data:</p>
	<form action="/staff/search" method="GET">
		<input class="form-control" type="text" name="q" placeholder="search staff .." value="{{old('q')}}">
		<input class="btn btn-info btn-sm type="submit" value="search">
	</form>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php $current = $staff->currentPage(); $count=(7*$current); $i = ($count-6); ?>
		@foreach($staff as $p)
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $p->name }}</td>
			<td>{{ $p->position }}</td>
			<td>{{ $p->age }}</td>
			<td>{{ $p->address }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/staff/edit/{{ $p->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/staff/delete/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		<?php $i++;  ?>
		@endforeach
	</table>

	{{$staff->links()}}
 
 
</body>
</html>
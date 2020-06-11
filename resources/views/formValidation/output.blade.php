<!DOCTYPE html>
<html>
<head>

	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
 	<div class="container">
 		<div class="row justify-content-center">
 			<div class="col-lg-6">
 				<div class="card mt-5">
 					<div class="card-body">
 						<h3 class="text-center">Blogspot</h3>
 						<h3 class="my-4">Data yang diinput: </h3>
 						<br>
						<table class="table table-borded table-striped">
							<tr>
								<td style="width: 150px">Name</td>
								@php
									$i=1
								@endphp
								<td>{{$data->name}}</td>
							</tr>
							<tr>
								<td>Job</td>
								<td>{{$data->job}}</td>
							</tr>
							<tr>
								<td>Age</td>
								<td>{{$data->age}}</td>
							</tr>
						</table>
 					</div>
 				</div> 	
 			</div>
 		</div> 	
 	</div>
	
 
</body>
</html>
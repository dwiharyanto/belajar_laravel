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
 						<br>

 						
 						@if (count($errors)>0)
 						<div class="alert alert-danger">
 							<ul>
 								@foreach ($errors->all() as $error)
 									<li>{{$error}}</li>
 								@endforeach
 							</ul>
 						</div>
 						@endif

 						<br>
 						<!-- form validasi -->
 						<form action="/form/process" method="POST">
 							{{csrf_field()}}
 							<div class="form-group">
 								<label for="name">Name</label>
 								<input type="text" class="form-control" name="name" value="{{old('name')}}">
 							</div>
 							<div class="form-group">
 								<label for="job">job</label>
 								<input type="text" class="form-control" name="job" value="{{old('job')}}">
 							</div>
 							<div class="form-group">
 								<label for="age">age</label>
 								<input type="text" class="form-control" name="age" value="{{old('age')}}">
 							</div>
 							<div class="form-group">
 								<input type="submit" class="btn btn-primary" value="Process">
 							</div>
 						</form>
 					</div>
 				</div> 	
 			</div>
 		</div> 	
 	</div>
	
 
</body>
</html>
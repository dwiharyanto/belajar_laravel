<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<form action="usersform/process" method="post">
		<input type = "hidden" name = "_token" value = "{{csrf_token()}} ">
      
      	Name :
		<input type="text" name="name"> <br/>
		Address :
		<input type="text" name="address"> <br/>
		<input type="submit" value="Save">
	</form>
 
</body>
</html>
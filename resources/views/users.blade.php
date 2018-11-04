<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
</head>
<body>
	
	<form class="" action="/register" method="POST">
		{{ csrf_field() }}
		<input type="text" name="name" value=""><br>
		<input type="email" name="email" value=""><br>
		<input type="password" name="password" value=""><br>
		
		<input type="submit" name="Reg Now">
	</form>
	
</body>
</html>
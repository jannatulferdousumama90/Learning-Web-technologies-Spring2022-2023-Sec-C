<!DOCTYPE html>
<html>
<head>
	<title>Gender Selection Form</title>
</head>
<body>
	<h2>GENDER</h2>
	<form action="handler.php" method="post">
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

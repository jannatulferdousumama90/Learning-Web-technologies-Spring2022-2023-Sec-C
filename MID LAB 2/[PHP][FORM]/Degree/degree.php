<!DOCTYPE html>
<html>
<head>
	<title>Degree Selection Form</title>
</head>
<body>
	<h1>DEGREE</h1>
	<form method="post" action="handler.php">
		<label for="degree">Select Degree:</label>
		<select id="degree" name="degree">
			<option value="SSC">SSC</option>
			<option value="HSC">HSC</option>
			<option value="BSc">BSc</option>
			<option value="MSc">MSc</option>
		</select>
		<br>
		<hr>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

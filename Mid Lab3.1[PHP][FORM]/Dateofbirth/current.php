<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth Form</title>
</head>
<body>
	<h1>DATE OF BIRTH</h1>
	<form method="POST" action="">
		<label for="dob">Enter your date of birth:</label>
		<input type="date" id="dob" name="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>">
		<hr>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$dob = $_POST['dob'];
			echo "<p>Your date of birth is: $dob</p>";
		}
	?>
</body>
</html>

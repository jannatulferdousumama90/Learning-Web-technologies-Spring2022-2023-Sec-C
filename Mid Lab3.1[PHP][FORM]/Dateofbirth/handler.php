<!DOCTYPE html>
<html>
<head>
	<title>Handler Page</title>
</head>
<body>
	<?php
		if (isset($_POST['dob'])) {
			$dob = $_POST['dob'];
			echo "<p>Your date of birth is: $dob</p>";
		} else {
			echo "<p>No date of birth submitted</p>";
		}
	?>
	<p><a href="dateofbirth.php">Go back to form</a></p>
</body>
</html>

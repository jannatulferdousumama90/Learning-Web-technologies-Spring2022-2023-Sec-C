<!DOCTYPE html>
<html>
<head>
	<title>Gender Selection Handler</title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])) {
		$gender = $_POST['gender'];
		echo "<h2>Selected Gender: $gender</h2>";
	}
	?>
	<a href="gender.php">Go Back to Gender Selection Form</a>
</body>
</html>

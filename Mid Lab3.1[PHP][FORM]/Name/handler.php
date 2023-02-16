<!DOCTYPE html>
<html>
<head>
	<title>Handler Page</title>
</head>
<body>
	<?php
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			echo "<h3>Output:</h3>";
			echo "<p>Your name is: $name</p>";
		}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
	<form method="post">
		<h3>NAME</h3>
		<input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" />
		<br><br>
		<hr>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			echo "<h3>Output:</h3>";
			echo "<p>Your name is: $name</p>";
		}
	?>
</body>
</html>

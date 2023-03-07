<!DOCTYPE html>
<html>
<head>
	<title>Gender Selection Form</title>
</head>
<body>
	<h2>GENDER</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="radio" id="male" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == "male") echo "checked"; ?>>
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "female") echo "checked"; ?>>
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == "other") echo "checked"; ?>>
		<label for="other">Other</label><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if(isset($_POST['submit'])) {
		$gender = $_POST['gender'];
		echo "<h2>Selected Gender: $gender</h2>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Selection Form</title>
</head>
<body>
	<h1>DEGREE</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="degree">Select Degree:</label>
		<select id="degree" name="degree">
			<option value="SSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'SSC') echo 'selected'; ?>>SSC</option>
			<option value="HSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'HSC') echo 'selected'; ?>>HSC</option>
			<option value="BSc" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'BSc') echo 'selected'; ?>>BSc</option>
			<option value="MSc" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'MSc') echo 'selected'; ?>>MSc</option>
		</select>
		<br>
		<hr>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if (isset($_POST['degree'])) {
		$degree = $_POST['degree'];
		echo "<p>Selected degree: " . $degree . "</p>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Form</title>
</head>
<body>

	<form method="POST">
		<label for="blood-group">Select Blood Group:</label>
		<select name="blood-group" id="blood-group">
			<option value="A+" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'A+') { echo 'selected'; } ?>>A+</option>
			<option value="A-" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'A-') { echo 'selected'; } ?>>A-</option>
			<option value="B+" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'B+') { echo 'selected'; } ?>>B+</option>
			<option value="B-" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'B-') { echo 'selected'; } ?>>B-</option>
			<option value="O+" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'O+') { echo 'selected'; } ?>>O+</option>
			<option value="O-" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'O-') { echo 'selected'; } ?>>O-</option>
			<option value="AB+" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'AB+') { echo 'selected'; } ?>>AB+</option>
			<option value="AB-" <?php if (isset($_POST['blood-group']) && $_POST['blood-group'] === 'AB-') { echo 'selected'; } ?>>AB-</option>
		</select>
		<button type="submit">Submit</button>
	</form>

	<?php
	// check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$selected = $_POST['blood-group'];
		echo "<p>Selected Blood Group: " . $selected . "</p>";
	}
	?>

</body>
</html>

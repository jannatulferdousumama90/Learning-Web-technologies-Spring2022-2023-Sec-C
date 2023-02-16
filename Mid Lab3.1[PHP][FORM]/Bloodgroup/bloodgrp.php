<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Form</title>
</head>
<body>

	<form method="POST" action="handler.php">
		<label for="blood-group">Select Blood Group:</label>
		<select name="blood-group" id="blood-group">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
		</select>
		<button type="submit">Submit</button>
	</form>

	<?php
	// check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$selected = $_POST['blood-group'];
		echo "Selected Blood Group: " . $selected;
	}
	?>

	<script>
		// pre-select the previously selected option, if any
		var previouslySelected = "<?php echo isset($_POST['blood-group']) ? $_POST['blood-group'] : ''; ?>";
		if (previouslySelected) {
			document.querySelector('#blood-group [value="' + previouslySelected + '"]').selected = true;
		}
	</script>

</body>
</html>

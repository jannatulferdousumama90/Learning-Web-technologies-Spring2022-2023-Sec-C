<!DOCTYPE html>
<html>
<head>
	<title>Email Form</title>
</head>
<body>
	<h1>EMAIL</h1>
	<form method="post" action="">
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" />
		<br />
		<input type="submit" value="Submit" />
	</form>

	<?php
		// Check if form has been submitted
		if (isset($_POST['email'])) {
			// Retrieve email from form
			$email = $_POST['email'];

			// Display email on current page
			echo "<p>Email entered: " . $email . "</p>";
		}
	?>
</body>
</html>

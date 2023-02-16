<!DOCTYPE html>
<html>
<head>
	<title>Email Form - Handler</title>
</head>
<body>
	<?php
		// Check if form has been submitted
		if (isset($_POST['email'])) {
			// Retrieve email from form
			$email = $_POST['email'];

			// Display email on handler page
			echo "Email submitted: " . $email;
		}
	?>
</body>
</html>

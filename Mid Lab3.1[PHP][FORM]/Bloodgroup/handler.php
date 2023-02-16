<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Handler</title>
</head>
<body>

	<?php
	// check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$selected = $_POST['blood-group'];
		echo "Selected Blood Group: " . $selected;
	}
	?>

</body>
</html>

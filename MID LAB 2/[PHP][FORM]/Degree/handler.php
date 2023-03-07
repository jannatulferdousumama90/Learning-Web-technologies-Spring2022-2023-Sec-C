<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['degree'])) {
        $degree = $_POST['degree'];
        echo "Selected degree: " . $degree;
    } else {
        echo "No degree selected.";
    }
} else {
    header("Location: index.html");
}
?>

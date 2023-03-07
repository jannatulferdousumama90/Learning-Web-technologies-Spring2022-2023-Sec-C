<?php

// Declare a 2D array
$array = array(
    array("1", "2", "3", "A"),
    array("1", "2", "B", "C"),
    array("1", "D", "E", "F")
);

// Print the array as a table with separate columns for digits and letters
echo "Array:\n";
echo "Digits   Letters\n";
foreach ($array as $row) {
    echo $row[0] . "        " . $row[1] . " " . $row[2] . " " . $row[3] . "\n";
}

// Print the letters in a square shape
echo "\nSquare shape:\n";
$rows = count($array);
$cols = count($array[0]);
$max_len = 0;
for ($i = 0; $i < $rows; $i++) {
    for ($j = 1; $j < $cols; $j++) {
        $len = strlen($array[$i][$j]);
        if ($len > $max_len) {
            $max_len = $len;
        }
    }
}

for ($i = 0; $i < $rows; $i++) {
    for ($j = 1; $j < $cols; $j++) {
        $letter = $array[$i][$j];
        $spaces = str_repeat(" ", $max_len - strlen($letter));
        echo $array[$i][0] . "        " . $letter . $spaces . "  ";
    }
    echo "\n";
}
?>

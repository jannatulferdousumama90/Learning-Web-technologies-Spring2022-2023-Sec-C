<?php

$amount = readline();
$tax = 0.15;
$totalTax = $amount * $tax;
$totalAmount = $amount + $totalTax;
echo "Amount: ".$amount;
echo "\nTotal tax: ".$totalTax;
echo "\nTotal amount: ".$totalAmount;

?>
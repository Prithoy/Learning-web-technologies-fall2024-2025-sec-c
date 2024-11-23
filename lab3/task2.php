<?php

$amount = 200;
$vatRate = 25;
$vat = $amount * ($vatRate / 100);
$totalAmount = $amount + $vat;

echo "Total Amount (including VAT) : $totalAmount<br>";
?>
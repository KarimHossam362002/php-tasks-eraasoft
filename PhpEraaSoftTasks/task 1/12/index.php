<?php
//Write a PHP program that calculates the sum of the values in an associative array using a foreach loop.
$sales = ["Jan" => 100, "Feb" => 200, "Mar" => 150];
$sum =0;
foreach ($sales as $key => $value) {
    $sum = $sum +$value;
}
echo $sum;
?>
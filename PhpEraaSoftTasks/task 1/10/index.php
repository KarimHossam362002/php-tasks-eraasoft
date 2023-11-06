<?php
//Write a PHP program that prints the even numbers from 1 to 15 using a foreach loop.
$number =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
foreach ($number as $value) {
    if (($value)%2 ==0) {
        echo "$value<br>";
    }
}
?>
<?php
//The program, in which an array contains 10 numbers, and you store a number and calculates
// how many numbers are greater  than or equal and how many numbers are smaller  than this number inside.

$array = [ 1,10,5,2,11];
$x = 3;
$largeCounter = 0;
$smallCounter = 0;
foreach ($array as $value) {
    if ($value < $x) {
        $smallCounter++;
    }
    else{
        $largeCounter++;
    }
}
echo "Numbers Smaller than ($x) = $smallCounter" ;
echo "<br>";
echo "Numbers Larger than ($x) = $largeCounter" ;
?>
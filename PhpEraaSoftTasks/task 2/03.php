<?php
//A program in which an array of a group of numbers and print the largest and smallest number


$array = [ 1,10,5,2,11]; //11   //1
//careful about intializing the varaiables
$largestNum = $array[0];
$smallestNum = $array[0];


foreach ($array as $index => $value) {
    if ($largestNum < $value) {
        $largestNum = $value;
    }
}

foreach ($array as $index => $value) {
    if ($smallestNum > $value) {
        $smallestNum = $value;
    }
}
echo "The largest Number  = $largestNum";
echo "<br>";
echo "The smallest Number  = $smallestNum";
?>
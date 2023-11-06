<?php
//Create a function that takes a array of numbers and returns the second largest number.
$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function findSecondLarge($nums){
    arsort($nums);
    $array=array_values($nums); // return the values of the sorted array with new indexed instead of pushing in another array
    $secondLarge = $array[1];
    return $secondLarge;
}
$findSecond = findSecondLarge($numbers);
echo "The second Largest number in the array is : $findSecond";
?>
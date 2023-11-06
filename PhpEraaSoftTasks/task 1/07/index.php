<?php

/*
Return the Smallest number in the array using loop
$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ]

*/
$numbers=[5,15,-10,100,250,0,1];
$smallNumber = $numbers[0];
foreach ($numbers as $index => $value) {
    if ($smallNumber>$value) {
       $smallNumber =$value;
    }
}
echo "the smallest number in the array is $smallNumber";
?>
<?php
/*
Return the Largest number in the array using loop.
$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ]

*/
$numbers=[5,15,-10,100,250,0,1];
$largeNumber = $numbers[0];
foreach ($numbers as $index => $value) {
    if ($largeNumber<$value) {
       $largeNumber =$value;
    }
}
echo "the Largest number in the array is $largeNumber";
?>
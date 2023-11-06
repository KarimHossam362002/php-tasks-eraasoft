<?php
//-A program in which an array contains 10 numbers and 
//another array 2D of size 2x5. What is required is that the second array is dictated by the first array.

$array = [];
$array_size = 10;
for ($i=0; $i <$array_size ; $i++) { 
    $array[]=rand(1,20);
}
$array2 = [[0,0,0,0,0],[0,0,0,0,0]];

foreach ($array as $index => $value) {
    if ($index <5) {
        $array2[0][$index] = $value;
    }
    else{
        $array2[1][$index-5]=$value;
    }
}
print_r($array2); 

?>
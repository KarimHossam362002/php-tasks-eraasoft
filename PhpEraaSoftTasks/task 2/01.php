<?php
//A program that calculates the average of the numbers in an array of n elements. The array is filled with random numbers. 
$arrayLength = 10;
$arr=[];
$totalAvg =0;
$sum = 0;
for ($i=0; $i <$arrayLength ; $i++) { 
    $arr[]=rand(1,200);
}
foreach ($arr as $val) {
   $sum  = $sum +$val;
}
$totalAvg = $sum /(count($arr));
echo "The total average  = $totalAvg";
?>
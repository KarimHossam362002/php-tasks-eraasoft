<?php

/*
2 - Write a script to remove the duplicated numbers from this array
	A – with built-in function
B – with loop 
	$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] 
Output :  [ 1 , 2 , 3 , 4 , 5 , 6 , 7 ]
*/


$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ] ;
$a = array_unique($numbers);
sort($a);

echo "[";
foreach($a as $val){
    if($val ==1)
    echo "$val";
    else{
        echo",$val";
    }
}
echo "]";
/*=========================================================== */

$unique_numbers=[];

foreach ($numbers as $number) {
    $duplicate = false;
    foreach ($unique_numbers as $unique_number) {
        if ($number == $unique_number) {
            $duplicate = true;
            break;
        }   
    }
    if (!$duplicate) {
        $unique_numbers[]=$number;
    }
}
sort($unique_numbers);
echo "<br><br>";
echo "[";
foreach($unique_numbers as $val){
    if($val ==1)
    echo "$val";
    else{
        echo",$val";
    }
}

echo "]";

// another solution
// foreach($numbers as $number){
//     if(! in_array($number,$arr)){
//         $arr [] = $number;
//     }
//     }
?>
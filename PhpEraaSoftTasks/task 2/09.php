<?php
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x = 545; //1000
// find number function
function findNumber($num){
    global $x;
    foreach ($num as $value) { 
        if ($x == $value) {
            echo "Found"; echo "<br>";
            checkSign($x); echo "<br>";
            calculateDigits($x); echo "<br>";
            checkPrime($x); echo "<br>";
            checkOddOrEven($x); echo "<br>";
            readRightAsLeft($x);
            return;
        }
    }
    echo "Not Found";
}

////////////////////////////////////////////////////////////////
// 1 pos or neg function
function checkSign($number){
if ($number >0) {
    echo "Positive";
}
else{
    echo "Negative";
}
}
////////////////////////////////////////////////////////////////
// 2 calculate digits
function calculateDigits($number){
    $counter =0;
    $numStr = (string)$number;
    $counter = strlen($numStr);
    echo $counter;
}
////////////////////////////////////////////////////////////////
//  3 check prime or not
function checkPrime($number){
    if ($number < 2){
        echo "not prime";
        return;
    }
    for ($i=2; $i <sqrt($number) ; $i++) { // if true then it is not prime
       if ($number % $i ==0) {
        echo "not prime";
        return;
       }
    }
    echo "prime";
}
////////////////////////////////////////////////////////////////
// 4 odd or even
function checkOddOrEven($number){
    if ($number%2 == 0) {
        echo "even";
    }
    else{
    echo "odd";
    }
}
////////////////////////////////////////////////////////////////
// 5 read from right as left
function readRightAsLeft($number){
    $num_str = (string)$number;

    $right = strlen($num_str)-1;
    $left = 0;
    $isEqual = true;
    while ($left <= $right) { // the operand < is when it is total odd
        if ($num_str[$left] != $num_str[$right]) {
            $isEqual = false;
            break;
        }
        $left++;
        $right--;
    }
    if ($isEqual) {
        echo "Yes read from the right as the left";
    } else {
        echo "No";
    }
}
////////////////////////////////////////////////////////////////
findNumber($numbers);
?>
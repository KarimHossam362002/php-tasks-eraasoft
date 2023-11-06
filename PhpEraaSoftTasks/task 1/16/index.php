<?php
/*
Make a calculator with these operations using if condition
 Submission +
 Subtraction -
 Multiplication *
 Division /
 Power ^
 Modulus % 

*/
$num1 = 3;
$num2 =2;
$result =0;
$operation ="^";
// Submission +
if ($operation == "+") {
    $result = $num1+$num2;
    echo "the equation of $num1 $operation $num2 = $result";
}
//Subtraction -
else if ($operation == "-") {
    $result = $num1-$num2;
    echo "the equation of $num1 $operation $num2 = $result";
}
// Multiplication *
else if ($operation == "*") {
    $result = $num1*$num2;
    echo "the equation of $num1 $operation $num2 = $result";
}
// Division /
else if ($operation == "/") {
    $result = $num1/$num2;
    echo "the equation of $num1 $operation $num2 = $result";
}
// Power ^
else if ($operation == "^") {
    $result = pow($num1,$num2);
    echo "the equation of $num1 $operation $num2 = $result";
}
//Modulus % 
else if ($operation == "%") {
    $result = $num1%$num2;
    echo "the equation of $num1 $operation $num2 = $result";
}
else {
    echo "Wrong operation";
}

?>
<?php
/*
calculate and print the factorial of a number using a for loop. The factorial of a number is the product of 
all integers up to and including that number
 Example : the factorial of 4 is 4*3*2*1= 24
*/
$number = 5;
$factorial = 1;
for ($i=1; $i <=$number ; $i++) { 
    $factorial = $factorial*$i;
}
echo "The factorial of $number is $factorial";
?>
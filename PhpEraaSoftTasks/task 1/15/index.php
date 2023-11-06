<?php
/*
Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a for loop.
*/
for ($i=1; $i <=100 ; $i++) { 
    if ($i%3==0) {
        echo "$i ";
    }
}
?>
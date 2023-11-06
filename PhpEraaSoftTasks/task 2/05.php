<?php
//Create a function that takes an array of names and returns an array where only the first letter of each name is capitalized.
$arrayOfNames = ["eraasoft", "backend", "group313"];
function Array_of_names($array){
  
    foreach ($array as &$arr) {
       $arr= ucfirst($arr);
    }
    return $array;
}
$capArray = Array_of_names($arrayOfNames);
print_r($capArray);
?>
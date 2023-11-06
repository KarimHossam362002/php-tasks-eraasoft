<?php
//Write a PHP program that prints the keys and values of an associative array using a foreach loop.

$person = ["name" => "John", "age" => 30, "city" => "New York"];
foreach ($person as $key => $value) {
    echo $key .' '. $value .'<br>';
}
?>
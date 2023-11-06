<?php
// Write a PHP program that prints the elements of a multidimensional array using a nested foreach loop.
$students = [
    ["name" => "John", "age" => 20, "grade" => "A"], //0
    ["name" => "Mary", "age" => 22, "grade" => "B"], //1
    ["name" => "Tom", "age" => 18, "grade" => "A"] //2
];
foreach ($students as $student) {
   
    foreach ($student as $key => $value) {
        echo "$key : $value<br>";
    }
    echo "<br>";
}
?>
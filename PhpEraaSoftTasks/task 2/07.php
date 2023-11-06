<?php
//Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. 
//If Bob is not in the array, return -1.
$names = ["Alice", "Bob", "Charlie", "Dave"];
$names_2 = ["Alice", "Charlie", "Dave"];

function searchForBob($arrayOfNames){
    foreach ($arrayOfNames as $index => $value) {
        if ($value == "Bob") {
            return $index;
        }
    }
    return -1;
}
//     $arrayLength = count($arrayOfNames);
//     for ($i=0; $i <$arrayLength ; $i++) { 
//         if($arrayOfNames[$i] == "Bob"){
//             return $i;
//         }
//     }
// }
$checkStatus= searchForBob($names);
echo $checkStatus;
echo "<br>";
$checkStatus =searchForBob($names_2);
echo $checkStatus;
?>
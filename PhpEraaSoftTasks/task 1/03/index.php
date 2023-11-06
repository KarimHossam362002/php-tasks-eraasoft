<?php
/*
- Write a program which will count the "a" characters in
 [ “e”,”r”,”a”,”a”,”s”,”o”,”f”,”t”]

*/
$arr = ["e","r","a" ,"a" ,"s","o","f","t"];
$count=0;
foreach($arr as $val){
    if ($val == "a"){
        $count++;
    }
}
echo $count;
?>
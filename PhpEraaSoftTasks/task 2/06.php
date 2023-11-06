<?php
//Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.
// Note that you must do this in-place without making a copy of the array.
$nums = [0,1,0,3,12];

function moveZeroes(&$nums) {
    $numsLength = count($nums);
    $index = 0;
    $counter = 0;
        // if value != 0 then move to the pre index
        // after performing this operation then move all zeros after the values !=0

   for ($i=0; $i <$numsLength ; $i++) { 
    if ($nums[$i] != 0) {
        $nums[$index] = $nums[$i];
        $index++;
    }
    
   }
   $counter = $index;
   while ($counter < $numsLength) {
    $nums[$counter] = 0;
    $counter++;
   }
   return $nums;
}
$zeros = moveZeroes($nums);
print_r($zeros);
?>
<?php
/*using a for loop to add all the integers between 0 and 30 and display the total 
 
Output  : The sum of the numbers 0 to 30 is 465
 */
$total =0;
for ($i=0; $i <=30 ; $i++) { 
    $total +=$i;
    //$total = $total +$i;
}
echo "the sum of the numbers 0 to 30 is $total";
?>
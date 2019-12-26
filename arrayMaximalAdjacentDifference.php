# Given an array of integers, find the maximal absolute difference between any two of its adjacent elements.

# Example

# For inputArray = [2, 4, 1, 0], the output should be
# arrayMaximalAdjacentDifference(inputArray) = 3.

<?php
function arrayMaximalAdjacentDifference($inputArray) {
    $tab=array();
for($i=0;$i<count($inputArray)-1;$i++)
{
   $tab[]=abs($inputArray[$i]-$inputArray[$i+1]);
}
return max($tab);
}
?>

# You are given an array of integers representing coordinates of obstacles situated on a straight line.

# Assume that you are jumping from the point with coordinate 0 to the right. 
# You are allowed only to make jumps of the same length represented by some integer.

# Find the minimal length of the jump enough to avoid all the obstacles.

# Example

# For inputArray = [5, 3, 6, 7, 9], the output should be
# avoidObstacles(inputArray) = 4.

<?php
function not_inArray($result,$inputArray){
    $is_inArray=true;
    for($i=0;$i<count($inputArray);$i++){
        if($inputArray[$i]===$result){
            $is_inArray=false;
        break;
        }
    }
    return $is_inArray;
}
function avoidObstacles($inputArray) {
  asort($inputArray);
    $inputArray = array_values($inputArray);
    $lastElement=$inputArray[count($inputArray)-1];
    print_r($inputArray);
$list_tab=array();
for($result=2;$result<=$lastElement+1;$result++){
$ifTrue=true;
$tab=array();
$tab[]=$result;
if(not_inArray($tab[count($tab)-1],$inputArray)===false){
    $ifTrue=false;
} 
$j=2;
while($tab[count($tab)-1]<$lastElement){
    $tab[]=$result*$j; 
    if(not_inArray($tab[count($tab)-1],$inputArray)===false){
        $ifTrue=false;
    } 
    $j++; 
}
$tab[]=$result*$j; 
if(not_inArray($tab[count($tab)-1],$inputArray)===false){
    $ifTrue=false;
} 
if($ifTrue===true){
  $list_tab[]=$result;
}
}
return min($list_tab);
}
?>

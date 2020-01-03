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

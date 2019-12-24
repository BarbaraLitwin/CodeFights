# Given a string, find out if its characters can be rearranged to form a palindrome.

# Example

# For inputString = "aabb", the output should be
# palindromeRearranging(inputString) = true.

# We can rearrange "aabb" to make "abba", which is a palindrome.
<?php
function palindromeRearranging($inputString) {
$data = [];
for($i=0;$i<strlen($inputString);$i++){
$data += [ $inputString[$i] =>0 ];
$data[$inputString[$i]]++;
}
$counter=0;
$ifPalindrom=true;
foreach($data as $k=>$v){
if($v%2===1)
{
    $counter++;
    if($counter>1)
    {
    $ifPalindrom=false;
    break;
    }
}
}
return $ifPalindrom;
}

?>
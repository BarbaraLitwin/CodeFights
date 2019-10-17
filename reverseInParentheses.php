<?php
function Reverse1(&$_string)
 {
	for($i=strlen($_string)-1;$i>(strlen($_string)-1)/2;$i--)
	{
		$help=$_string[strlen($_string)-1-$i];
		$_string[strlen($_string)-1-$i]=$_string[$i];
		$_string[$i]=$help;
	}
 }
function indexes($inputString)
   {
	   $indexes=array();
	  
	   for($i=strlen($inputString)-1;$i>=0;$i--)
	   {
		   if($inputString[$i]==')'&&count($indexes)==0)
		   {
			   $indexes[]=$i;
		   }
		  if($inputString[$i]==')'&&count($indexes)>0)
		   {
			   	unset($indexes[0]);
				$indexes = array_values($indexes);
			   $indexes[]=$i;
		   }
		     if($inputString[$i]=='('&&count($indexes)==1)
		   {
			   $indexes[]=$i;
				   break;
		   }
	   }
	   return $indexes;
   }
   function reverseSubstr($inputString,$number1,$number2)
   {
	   $reverseSubstr='';
	   $beforeSubstr='';
	   $afterSubstr='';
	   $Substr='';
	   for($i=$number1+1;$i<$number2;$i++)
	   {
		   $reverseSubstr.=$inputString[$i];
	   }
	   Reverse1($reverseSubstr);
	   if($number1>0)
	   {
		for($i=0;$i<$number1;$i++)
	      {
		     $beforeSubstr.=$inputString[$i];
	      }
	   }
	   if($number2<strlen($inputString)-1)
	     {
			 for($i=$number2+1;$i<strlen($inputString);$i++)
			 {
				$afterSubstr.=$inputString[$i];
			 }
	     }
	   $Substr.=$beforeSubstr.$reverseSubstr.$afterSubstr;
	   return $Substr;
   }
   function Ifparentheses($inputString)
   {
	   $if1=false;
	   for($i=0;$i<strlen($inputString);$i++)
	   {
		   if($inputString[$i]=='(')
		   {
			   $if1=true;
			   break;
		   }
	   }
	   return $if1;
   }
function reverseInParentheses($inputString) {
	$substr_values=indexes($inputString);
	 if(empty($substr_values))
	 {
		 return $inputString;
	 }
		 else
		 {
		do{
			  $substr_values=indexes($inputString);
			  $inputString=reverseSubstr($inputString, $substr_values[1], $substr_values[0]);
		}while(Ifparentheses($inputString));
		 return $inputString;
		 }
}
?>

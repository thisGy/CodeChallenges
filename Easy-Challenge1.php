<?php 
/*
Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order.

Use the Parameter Testing feature in the box below to test your code with different arguments. 
*/

function FirstReverse($str) {  
  $str = strrev($str);
  // code goes here
  return $str; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>  
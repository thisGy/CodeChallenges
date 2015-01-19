<?php 
/*
Using the PHP language, have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm. Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a). Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string.

Use the Parameter Testing feature in the box below to test your code with different arguments. 
*/


function LetterChanges($str) {  
	//convert string to lowercase
	$str = strtolower($str);	

	$alphabet="abcdefghijklmnopqrstuvwxyz";
	$vowels = 'aeiou';
	//Split into array
	$letters = str_split($str);
	$str = '';
	foreach($letters as $letter){
      //get postion of letter
        $pos = strpos($alphabet, $letter);
      
      //if it exists move pointer up 1
		if($pos !== false){
          //if letter is last in the string (z), return the letter at the beginning of the alphabet(a)
          if(substr($alphabet, -1) == $letter){
            $letter = $alphabet{0};                    
          }else{  
            $letter = $alphabet{$pos+1};          
          }
        }

		//Check for vowels
		if(strpos($vowels, $letter) !== false){
			$letter = strtoupper($letter);
		}
		$str .="$letter";
	}

  // code goes here
  return $str; 
         
}

   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo LetterChanges(fgets(fopen('php://stdin', 'r')));  

?> 
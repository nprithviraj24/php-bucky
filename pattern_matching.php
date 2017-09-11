<?php 
$string = 'This is a string';

if(preg_match('/is/',$string))  //takes 3 parameters , is used to find pattern matching among strings
echo '<br><br><br>Match found';
else {
	echo '<br> no match found';
}

echo '<br><br><br> To check if there is any space in the string';


function has_space($str){

if(preg_match('/ /',$str)){  //takes 3 parameters , is used to find pattern matching among strings
	echo '<br>has spaces'; 
    }
else {
	echo '<br>has NO spaces ';
   
}
}
echo '<br><br><rr>bullshit_this_is_cool';
has_space('bullshit_this_is_cool');


?>
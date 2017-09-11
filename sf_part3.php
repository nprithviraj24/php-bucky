<?php



$string = "Lets hope this works, i am just filling the sentence with i's";

// strpos() takes two mandatory  arguments 1st is the string to be found from and 2nd is string which is we need and one optional argument is offset value where offset starts from 0
$offset = 0;
$i = 'i';
$i_length = strlen($i);

echo '<br><br>';
while( $x = strpos($string , $i , $offset) ) //loop because the function strpos() stops executing if it finds the first time, to avoid this we use loop
{
echo '<br>letter\word '.$i.' is found at '.$x;  
$offset = $x + $i_length;
}

//substr_replace()  is to replace any substring. 1st arg - string we want to look out. 2nd string we want to replace. 3rd from where we want to start and 4th where it will end i.e the endpoint of  substring

$string_replace = substr_replace($string , ".<br>   Good god, it does!" , 19, strlen($string)-19 );

echo '<br><br> '.$string_replace;
echo '<br><br><br>';

//str_replace is used to replace predefined part of a string! IT takes 3args; 1st - string to be replaced with.. 2nd words you want to replace.. 3rd string you want to look in

$new_string = str_replace('i', ' ' , $string);
echo $new_string.'<br><br>';

$find = array('is','o','th');
$replace = array('IS', 'O','TH');

$new_string = str_replace($find, $replace , $string);
 
echo $new_string;




?>
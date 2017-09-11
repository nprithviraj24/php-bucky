<?php



$string = "Lets hope this works, i am just filling the sentence with i's";

// strpos() takes two mandatory  arguments 1st is the string to be found from and 2nd is string which is we need and one optional argument is offset value whereoffset starts starts from 0
$offset = 0;
$i = 'i';
echo '<br><br>';
while( $x = strpos($string , $i , $offset) ) //loop because the function strpos() stops executing if it finds the first time, to avoid this we use loop
{
echo '<br>letter \'i\' is found at '.$x;  
$offset = $x + 1;
}

?>
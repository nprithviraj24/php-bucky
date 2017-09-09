<?php 

//syntax and example of function

function fname(/*argument(s)*/) {   
$string = '<br><br><br><br> This is return type example ' ;
return $string;
}

function concatenating_two_strings($string1,$string2){
$string1 .= $string2;
echo '<br><br><br>'.$string1;
return $string2 .= $string1;
}

echo '<br><br><br> How function works...';

$str1 = 'Prtihvi ';
$str2 = 'Raj';
concatenating_two_strings('RAJ ', $str2);
echo '<br><br><br>'.concatenating_two_strings('PRITHVI ', $str1);

echo fname();


echo '<br><br><br>HI';

mysqli_connect('localhost','prithvi','') || die('<br>PAGE IS DEAD');  // instead of ||, the 'or' can also be used.

echo '<br>world';

?> 
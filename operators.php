<?php
$number = 52;
echo "number $number";
$number += 5 ;
echo "<br /> Add 5 - - $number";
$number -= 10 ;
echo '<br />Minus 10 - - '. $number ;
$number *= 5 ;
echo '<br /> multiplied by 5 - -'.$number;
$number %= 4 ;
echo '<br /> % with 4 - - '.$number.'<br /> <br /> <br />';

//VERY IMPORTANT
echo 'assignment operator for CONCATENATION OF STRINGs <br />';
$text = 'This';
echo '<br />'.$text;

$text .= ' is';  //that 'dot' is important 
echo '<br />'.$text;

$text .= ' important';
echo '<br />'.$text.'<br/>';

$number = 10;
echo ++$number;

if($number == 10 && $number == 11){
	echo '<br /> Well thats not possible'
;}
else {
	echo '<br /> This is wrong!'
;}

if($number >=10 || $number==15)
{
	echo '<br /> This has to be right.';
}
?>
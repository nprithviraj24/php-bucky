<?php 
//triple equals
$text1 = '1';
$text2 = 1;

$user_ip = $_SERVER['REMOTE_ADDR'];

function toCHECKGLOBAL(){
global $user_ip;           // HAVE TO DECLARE GLOBAL VARIABLE. IMPORTANT!!
echo 'Your ip address is : '.$user_ip;
}
toCHECKGLOBAL();



if($text1 === $text2 )
{
	echo ' <br /> maybe.';
}
else{
echo ' <br /> nope, not equal because values are same but datatypes are  different. In double equal to is used datatypes wont matter...  ';
}

switch($text2) {
	case 1: echo '<br> One';
	      break;
    case 2: echo '<br> Two';
	      break;
     default: echo "<br> NOT FOUND";
      break;
}

switch($text1){
	case 1: 
	echo '<br>It\'s a one and switch works as double equal ';
	break;
	default : 
	echo '<br> switch works as triple equal';
	break;
}

?>
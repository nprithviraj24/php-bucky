<?php 
$num1 = 20;

if ($num1 == 25){
	echo ' <br /> Yes equal to 25 <br />';
}
else if($num1 > 25){
	echo '<br /> greater than 25 ';
}
else{  // remember, there shouldnt be any condition beside ELSE. 
	echo 'less than 25 <br />' ;
}

$text = 'some random text';

if($text = 'some random text'){
	echo '<br /> yes they are equal';
} else {
	echo ' <br />  No they arent.';
}

?>
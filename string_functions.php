<?php 
echo '<br><strong>	Let\'s work on string function</strong>';

$example_string = ' Man ,	i love php. Shit is forreal & it\'s  better than C++ ' ;

echo '<br><br><br>';
$string	= str_word_count($example_string, 0 , '.');
echo $string;
echo '<br><br><br>';
 $stringg	= str_word_count($example_string, 1 , '.,');
print_r( $stringg);
echo '<br><br><br>';
 $stringgg= str_word_count($example_string, 2 , '.,&');
print_r($stringgg);

$str = 'PRITHVI NAGALAPELLI RAJU 24696';
echo '<br><br><br>';
$str_lenghth = strlen($str);
echo 'Length of my name is  '.$str_length;
echo '<br><br><br>';
$string_shuffled = str_shuffle($str);
$substr = substr($str, 0 ,7);  // 2nd parameter is starting value where 0 is start and 3rd parameter is end value  we can also pass parameter like strlen(*string_name*)/2 or 3 etc etc.

$reverse = strrev($str);

echo $string_shuffled;
echo '<br><br><br>';
echo $substr;
echo '<br><br><br>';
echo $reverse;

echo '<br><br><br>';
 
echo $string_one = ". . .This is  about something, which is php for n0w  .<br>";
echo $string_two = "	This is some essay. Im going to talk about javascript and jQ libraries	";
echo '<br><br>';
similar_text($string_one, $string_two, $result);
echo '	The similarity between above two texts is '.$result.' percentage';


echo '<br><br><br>';
$string_trimmed = trim($string_one);  //ltrim() and rtrim() also works
echo 'Lets trim something from my essay';
echo '<br>'.$string_trimmed;
$stringultimate = 'This is a <img src="some_image.jpg"> string.';
$string_slashes = htmlentities( addslashes($stringultimate));
echo '<br><br>';
echo $string_slashes;
echo'<br>'.stripslashes($string_slashes);


$string_length = strlen($string_one);
echo '<br><br><br> Lenght of string one is '.$string_length;

// TO USE STRLEN
echo '<br><br><br> Using for loops for echoing each character from string';
for($x=1; $x<=strlen($example_string); $x++){
	echo '<br>'.$x;
}


?>
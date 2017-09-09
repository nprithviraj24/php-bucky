<?php

$browser = get_browser(null, true);  //1st argument is user agent second is if we want in array
$browsertolower = strtolower($browser['browser']);


print_r($browser);
echo '<br><br><br>'.$browser['browser'];

if($browsertolower != 'chrome'){
	echo '<br><br>You\'re  not using Google chrome. Please switch to google chrome!';
}

?>

<?php
include 'header.inc.php';

if(isset($_POST['submit'])) {
	echo '<br>Part 1 process';
}
require 'conf.inc.php';

echo '<br><br>'.$ip_address;
foreach($ip_blcked as $ip){
	echo '<br>'.$ip;
	if($ip==$ip_address){
		echo '<img src="'.$images.'croppedcoolshit.png" />';
		die('Your ip is blocked  '.$ip); 
	}
}



?>

<h1>Lets see if it works</h1>
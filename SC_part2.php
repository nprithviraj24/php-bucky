<?php
//include 'header.inc.php';

//if(isset($_POST['submit'])) {
	//echo 'Process from part 2'; }
 $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];  //returns the router ip address 
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; // checks if he is using proxy or not and return the address
$remote_addr = $_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip)){
	$ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
else if(!empty($http_x_forwarded_for)){
	$ip_address = $http_x_forwarded_for;
}
else { 
	$ip_address = $remote_addr;
}

echo'<br><br>'.$ip_address;
?>
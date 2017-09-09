<?php

$host = $_SERVER['HTTP_HOST'];
echo '<br<br>'.$host.'<br><br>';
$images = '/series/images/';  // forward slash (/)

$ip_address = $_SERVER['REMOTE_ADDR'];
echo '<br><br>Your ip address is '.$ip_address.'<br>';
$ip_blcked = array('127.0.0.1','100.100.1.122');
echo "<br><br> works only if <strong>http://127.0.0.1/series/server_commands.php</strong> is entered as URL. <br><br>"


?>
<?php
$mysl_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = "";
$connection_error = 'Couldnt connect';

mysqli_connect($mysql_host , $mysql_user. $mysql_pass) or die($connection_error);


?>
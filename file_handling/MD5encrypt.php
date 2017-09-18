<?php

if(isset($_POST["user-password"]) && !empty($_POST["user-password"])) {
$post = md5($_POST["user-password"]);

$filename = 'hash.txt';
$handle = fopen($filename, 'r');
$file_password = fread($handle, filesize($filename));

	if($post == $file_password){
		echo '<br>Password ok ';
	} else{
		echo '<br>Incorrect';
	}

} else {
	echo'<br>Enter something ';
}


?>

<form action="MD5encrypt.php" method="POST">
Password: <input type="text" name="user-password"><br><br>
<input type="submit" value="Submit">
</form>
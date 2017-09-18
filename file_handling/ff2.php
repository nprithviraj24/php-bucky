<?php
//UNLINK()

$directory_2 = 'directory.txt';
if(@unlink($directory_2)){
	echo'<br><br>File <strong>'.$directory_2.'</strong> has been deleted.';
} else {
	echo '<br><br>Couldn\' t find the file';
}

echo '<br><br>Here, file being created in <strong>ffunctions.php</strong> and deleted in <strong>ff2.php</strong>';


//To rename a file
$filename2 = 'filename.txt';
$rand = rand(100000,999999).md5($filename2);

if(rename($filename2, $rand.'.txt')) {
	echo '<br>File <strong>'.$filename2.'</strong> has been renamed to <strong>'.$rand.'.txt</strong>';
} else {
	echo '<br><br> Error renaming.';
}


?>
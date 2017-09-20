<?php
header('Content-type: image/jpeg');

require_once('../db and admin/JOIN.php');


if(isset($_GET['id'])){
	$id = $_GET['id'];   //Important

	$q= "SELECT `username` FROM `users` WHERE `id`='".mysqli_real_escape_string($connected, $id)."'";
	$q_run= mysqli_query($connected, $q);

	if(mysqli_num_rows($q_run) == 1){
	$fetch_array = mysqli_fetch_assoc($q_run);
	$email = $fetch_array['username'].'@php.com';
	} else{
	$email = 'ID not found';
	}
}else{
	$email = 'No ID specified';
}

global $connected;
$length = strlen($email);

$font_size = 4;

$image_height = ImageFontHeight($font_size + 5);
$image_width = ImageFontWidth($font_size) * $length;

$image = imagecreate($image_width, $image_height );

imagecolorallocate($image, 255,255,255);
$font_color = imagecolorallocate($image, 0 , 0 , 0);

imagestring($image, $font_size, 0 , 0, $email, $font_color);
imagejpeg($image);
?>
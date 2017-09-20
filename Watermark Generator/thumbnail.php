<?php
	header('Content-type: image/jpeg');

if(isset($_GET['image'])){
	$image = $_GET['image'];

	$image_size = GetImageSize($image);
	$image_width = $image_size[0];
	$image_height = $image_size[1];

	$magicNumber = ($image_width + $image_height)/($image_width* ($image_height/45)); //some random logic
	
	 $new_width = $image_width * $magicNumber;
	 $new_height = $image_height * $magicNumber;

	 $new_image = imagecreatetruecolor($new_width, $new_height); //creates a new image of width = new_width and height = new_height
	 $old_image = ImageCreateFromJpeg($image);

	 imagecopyresized($new_image, $old_image, 0, 0,0, 0, $new_width, $new_height, $image_width, $image_height);
	  imagejpeg($new_image, $image.'.thumb.jpg');

}
?>
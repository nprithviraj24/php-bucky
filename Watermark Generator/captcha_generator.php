<?php
session_start();
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];
$font_size = 30;
$font_angle = 15;

$image_width = 100;
$image_height = 50;

$image = ImageCreate($image_width, $image_height);
ImageColorAllocate($image, 255, 255, 255);
$text_color = ImageColorAllocate($image, 0, 0, 0);

$text_height_placement = 40;
$text_width_placement = 20;

for($x=1; $x<30; $x++) {
	$x1 = rand(1, 100);
	$x2 = rand(1, 100);
	$y1 = rand(1, 100);
	$y2 = rand(1, 100);
	ImageLine($image, $x1, $y1, $x2, $y2, $text_color);
}

ImagettfText($image, $font_size, $font_angle, $text_width_placement, $text_height_placement, $text_color, 'font.ttf', $text );
/*
1st  argument is the image, 2nd is its font size, 3rd is the how the text should be tilted, 4th is where the text should be placed according to width and 5th is same as 4th but height,  6th is color of the text and 7th is type of font, 7th is the text itself.  
*/
ImageJpeg($image);
?>
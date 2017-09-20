<?php
header ('Content-type: image/jpeg');


if(isset($_GET['source'])){
    $source = $_GET['source'];
    
    $watermark = ImageCreateFromPng('UBlock.png');
    $watermark_w = ImageSx($watermark);
    $watermark_h = ImageSy($watermark);
    
    
    $image = ImageCreateTrueColor($watermark_w,$watermark_h);
    $image = ImageCreateFromJpeg($source);
    
    $image_size = GetImageSize($source);
    $x = $image_size[0] - $watermark_w - 235;
    $y = $image_size[1] - $watermark_h - 150;
    
   ImageCopyMerge($image, $watermark, $x, $y, 0, 0, $watermark_w, $watermark_h, 50);
    ImageJpeg($image, $source.'._watermarked.jpg');



/* function resize($newWidth, $targetFile, $originalFile) {

    $info = getimagesize($originalFile);
    $mime = $info['mime'];

    switch ($mime) {
            case 'image/jpeg':
                    $image_create_func = 'imagecreatefromjpeg';
                    $image_save_func = 'imagejpeg';
                    $new_image_ext = 'jpg';
                    break;

            case 'image/png':
                    $image_create_func = 'imagecreatefrompng';
                    $image_save_func = 'imagepng';
                    $new_image_ext = 'png';
                    break;

            case 'image/gif':
                    $image_create_func = 'imagecreatefromgif';
                    $image_save_func = 'imagegif';
                    $new_image_ext = 'gif';
                    break;

            default: 
                    throw new Exception('Unknown image type.');
    }

    $img = $image_create_func($originalFile);
    list($width, $height) = getimagesize($originalFile);

    $newHeight = ($height / $width) * $newWidth;
    $tmp = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    if (file_exists($targetFile)) {
            unlink($targetFile);
    }
    $image_save_func($tmp, "$targetFile.$new_image_ext");
} 
*/

}
/*<?php
header('Content-type: image/jpeg');

if( isset($_GET['source']) ){
	$source = $_GET['source'];
	
	$wk = imagecreatefrompng('UBlock.png');
	$wk_height = imagesy($wk);
	$wk_width = imagesx($wk);

	$img = imagecreatetruecolor($wk_width, $wk_height);
	$img = imagecreatefromjpeg($source);

	$img_size = getimagesize($source);  //stored as array where img_size[0] is width and img_size[1] is height
	$x = $img_size[0] - $wk_width - 10;
	$y = $img_size[1] - $wk_height - 10;

	imagecopymerge($image , $watermrk , $x , $y, 0, 0, $wk_width, $wk_height, 50);

	imagejpeg($img);

} else {
	$source = 'Nothing';
} */
?>
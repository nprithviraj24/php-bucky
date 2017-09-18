<?php

if( isset($_POST['submit']) )
{	$name= $_FILES["file"]["name"];  //file1 is name of input in form
echo 'Name: '.$name;

$extension = strtolower( substr($name, strpos($name,'.')+1)); 
echo '<br><br>Extension : '.$extension;

$size = $_FILES['file']['size'];

echo '<br><br>FILE SIZE: '.$size;
$max_size = 5242880;

$type = $_FILES['file']['type'];

echo '<br><br>Type: '.$type;

$tmp_name = $_FILES['file']['tmp_name'];

echo '<br><br> Its temporary name: '.$tmp_name;
}

if(isset($name)){
	
	if(!empty($name))
	 {  
		
		if( ( $extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' ) && ( $type == "image/jpeg" || $type == "image/png" ) && $size <= $max_size)
		{
			$location = 'uploads/';
	
			if(move_uploaded_file($tmp_name, $location.$name)){
						echo '<br><br><strong>Uploaded</strong><br><br>'; }
			else {
						echo '<br><br><strong>Failed tp upload</strong><br><br>'; }
		}

		 else 	{
					echo "<br><br><strong>File must be in jpg/jpeg/png format</strong><br><br>";
				}
		}
		else
		 {	echo '<br><br>Please choose a file.<br><br>';  }
}


?>


<form action="upload.php" method="POST" enctype = "multipart/form-data">
<input type="file" name="file"><br><br>
<input type="submit" value="Submit" name="submit">
</form>
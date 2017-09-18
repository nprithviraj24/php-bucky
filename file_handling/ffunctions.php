<?php
$filename = 'CLEVELANDroster.txt';
$handle = fopen($filename , 'r');
$dataIN =  fread($handle , filesize($filename));  
echo 'second argument in fread() will tell till where we have to read.<br><br>';

$name_array = explode(',' , $dataIN);

foreach($name_array as $name) {
	echo $name.'.<br>';
}


echo '<br><br>'.$name_array[3];
echo '<br><br>';

$implode_example = implode('-',$name_array);

echo trim($implode_example);  //it undoes what explode does. if 1st parameter are same..

//FILE_EXISTS()
$directory_2 = 'directory.txt';
if(file_exists($directory_2) ) {
	echo '<br><br><br><strong>File already exists</strong>';
} else {
	$h2 = fopen($directory_2,'w');
	fwrite($h2, 'created from php');
	fclose($h2);
}

echo '<br><br>To delete <strong>'.$directory_2.'</strong> open file <strong>ff2.php</strong>';

?>
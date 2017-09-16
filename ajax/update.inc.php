<?php
$conn = mysqli_connect('localhost', 'root', '', 'ajax');

if(!$conn){
	die('Didnot connect with the databse!');
}

if(isset($_POST['insert_text'])){
	$insert_text = $_POST['insert_text'];

	if(!empty($insert_text)){
		$q = "INSERT into `insert_data` VALUES('','".mysqli_real_escape_string($conn, $insert_text)."')";
			
			if($q_run = mysqli_query($conn, $q)){
				echo 'Data inserted';
			}else {
				echo '<br>Failed';
			}
}else {
		echo 'Enter the value<br>';
	}


}
?>
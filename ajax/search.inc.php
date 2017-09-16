<?php
$user = 'localhost';

if(isset($_GET['search_text'])) {
		$search_text = $_GET['search_text'];
	}

if(!empty($search_text)){
	$connect = @mysqli_connect('localhost', 'root', '', 'ajax');

		if(!$connect){
			die('Database DID NOT connect!');
			}

	$q = "SELECT `names` FROM `names` WHERE `names` LIKE '".@mysqli_real_escape_string($connect, $search_text)."%'";
	$q_run = mysqli_query($connect, $q);

	while($q_row = @mysqli_fetch_assoc($q_run)){
		echo $name ='<a href="anotherpage.php?search_text='.$q_row['names'].'">'. $q_row['names'].'</a><br>';
	} // it will link to another page with that name
}
?> 
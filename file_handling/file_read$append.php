<?php
// w - writing
// r - reading
//a - append

if(isset($_POST['name']) ){
	$name = $_POST['name'];
	if(!empty($name)){
 		$handle = fopen('nba.txt', 'a'); // 2 args. 1st - name  2nd - opening mode (w/r/a)

		fwrite( $handle, $name."\r\n" );  //double quotes neccesaary \r\n means next line
		fclose( $handle );

		$count = 1;
		echo '<br> Current teams are: ';
		$reading = file('nba.txt'); //It stores as array
		$reading_count = count($reading);

			foreach($reading as $fname){ //for each because $reading is a array here
					echo trim($fname);
					if($count < $reading_count ) {
						echo ', ';
					}
					$count++;
 				}
	} else{
		echo '<br>Please enter the name of team.';
	}


}
echo '<br>Written. DONE!';
?>

<form action="file_read.php" method="POST">
<br><br>
Name: <br><input type='text' name="name">
<br><br>
Submit:<input type="submit" value="submit" name="submit">

</form>
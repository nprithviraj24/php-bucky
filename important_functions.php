<?php

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ){
	$day = htmlentities($_GET['day']);
	$year = htmlentities($_GET['year']);
	$date = htmlentities($_GET['date']);

	if(!empty($day) && !empty($date) && !empty($year) ){
		echo 'OK<br><br> It is '.$day.' '.$date.' '.$year;
		}
		else {
			echo'<br>Enter all the fields';
		}
}
echo'<br><br>Now post method';

$random_pass = '123LBJ';

if(isset($_POST['password'])) {

	$password = htmlentities($_POST['password']);  //restricts from any html commands like <iframe>

		if(!empty($password)) {
				if($password == $random_pass) {  //double equal to important
  					echo '<br><br><br> <h3>Yes that is correct</h3> ';
  		} else {
  			echo '<br><br><br> <h3> Password in incorrect!</h3>';
  		}
  	} 
  	else {
  		echo'<br>Please enter the password ';
  	}		
}

?>

<form action="important_functions.php" method="GET">
Day: <br><input type="text" name="day"><br>
Date: <br><input type="text" name="date"><br>
Year: <br><input type="text" name="year"><br>
<input type="submit"  value="Submit">
</form>
<br><br>
<h2>Now POST method</h2>


<form action="important_functions.php" method="POST">
password: <br><input type="password" name="password"><br><br>

<input type="submit"  value="Submit">
</form>
<?php
session_start();

if(isset($_POST['secure'])){
	$_SESSION['secure'] = rand(1000,9999);
} else {
	$secure = @$_SESSION['secure'];
	$post = @$_POST['secure']; 
	if( $secure == $post ){
		echo '<br> It matches';
	} else{
		echo 'Incorrect match<br>';
		$_SESSION['secure'] = rand(1000,9999);
	}
}
?>
<br>
<img src="captcha_generator.php"><br />
<form action="index_captcha.php" method="POST">
   Type the value: <input type="text" name="secure" size="6"> <input type="submit" value="Submit">
</form>
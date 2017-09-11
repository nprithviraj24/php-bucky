<?php 

$find = array('prithvi' , 'surabhi');
$replace = array('pr****i', 's*****i');


if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
	echo '<br>Works';
	$user_input = $_POST['user_input'];
  
  $user_input_new = str_ireplace($find,$replace,$user_input); //str_ireplace
  echo '<br><br>'.$user_input_new;
}

?>
<hr />
<form action="word_censor.php" method="POST">
	<textarea name="user_input" rows="7" cols="30" value=''></textarea><br><br>
	<input type="submit" value = "Submit">
</form>   
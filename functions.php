<?php
echo 'generate random number <br>';
$rand = rand(1,6);  //can be given 2 limits. 1st min and 2nd is max.
$max = getrandmax();

echo $rand.'/'.$max.'<br><br>';

if(isset($_POST['roll'])){
	echo '<br>Clicked';
	echo '<br>You rolled a '.$rand.'/6';
}

?>

<form action="functions.php" method="POST">
	<input type="submit" name="roll" value="roll dice.">
</form>
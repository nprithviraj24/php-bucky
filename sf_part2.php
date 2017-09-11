<?php
$string = 'i hAte whO tYpE LiKe tHIs';
echo $string.'<br><br>Now we will change this to lower case: <br>  '.strtolower($string).'<br><br> Now to upper case: <br>'.strtoupper($string);



if(isset($_GET['user_name']) && !empty($_GET['user_name']))
{
	$user_name = $_GET['user_name'];
	echo'<br><br> Your name in caps : '.strtoupper($user_name).'<br>Your name in lower : '.strtolower($user_name);
}

?>

<form action='sf_part2.php' method="GET">  
<br><br><br Name : <input type="text" name="user_name"><br><br>
<input type="submit" value="Submit">
</form>
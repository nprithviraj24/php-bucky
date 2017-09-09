<?php
$offset = 0;

if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']) ){
	$text = $_POST['text'];
	$search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	$search_length = strlen($search);
	echo '<br>WORKS'; 
	if(!empty($text) && !empty($search) && !empty($replace)){

		while($strpos = strpos($text, $search , $offset) ) //subpos() return finds the positing on the substring in the main string
 { 
 	$offset = $strpos + $search_length;
     $text = substr_replace($text, $replace, $strpos, $search_length);
}

  echo '<br>'.$text.'<br><br>';
	} else{
		echo '<br>Please enter all values';
	}
}
?>


<form  action="find_and_replace.php" method="POST">
	
	<textarea name="text" rows="6" cols="30"></textarea>
	<br><br>
	Search for: <br>
	<input type="text" name="searchfor">
	<br><br>
	Replace with:<br>
	<input type="text" name="replacewith">
	<br><br>
	<input type="submit" value="Find and Replace">
</form>
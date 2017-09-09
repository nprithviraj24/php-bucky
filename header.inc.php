<h1>This is header file</h1>

<?php
$string1 = 'This if for header1_example file!!!';
$string2 = '<br><br>HEADER2222_example file!!';

echo '<br> There\'s only one difference between method "include" and "require" .. they both respond differently when a file cant be included. <br><strong>REQUIRE</strong> responds similar to function die meaning, when require doesn\'t find any file, the rest of the code wont execute.<br><br>';



global $script_name;
$script_name = $_SERVER['SCRIPT_NAME'];
echo '<br><br>'.$script_name;


?>


<form action="<?php echo $script_name ?>" method="POST">
<input type="submit" name="submit" value="Submit">  //case sensitive in name and type
</form>

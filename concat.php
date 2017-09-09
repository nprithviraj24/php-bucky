<?php 

echo $new = 'this is to concacenate two or more strings  <br  />';
$name = 'Prithvi';
$age = ' 19 ';
$year = '2nd year 2nd sem';

//one way to do it, which is HIGHLY recommended
echo '<br /><br /> Details '.$name.', '.$age.' ,'.$year; 

echo ' <br /><br /> Lets update the values <br /><br />';

$name = 'raj';
//this is the other way, slow way.
echo "Details $name, $age ,$year";
?>
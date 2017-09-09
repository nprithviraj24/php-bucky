<?php
$counter = 1;
while($counter<=10){
	echo $counter.'hello <br>';
  $counter++;
}

$counter1 = 1;
do{
	echo $counter1.'This will execute atleast once because DO WHILE loop <br> ';
	$counter1++;
}while($counter1<=10);

for($count=1; $count<=10 ; $count++)
{
	echo '<br> THIS IS FOR LOOP'.$count;
}
?>
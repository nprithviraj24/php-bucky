<?php 

$food = array('pasta', 'idly','dosa', 'pizza');
echo '<br><br>';
echo $food[1];
echo '<br><br>';
echo $food;
$food[4]='Fruit';
echo '<br><br>';
print_r($food);

//associative arrays
$foodie = array('pasta'=>300, 'idly'=>50,'dosa'=>250, 'pizza'=>200);

echo '<br><br>';
print_r($food);

echo $foodie['dosa'];

$films = array('Hollywood'=>array('Shawshank Redemption', 'Intouchables','godfather'), 'Bollywood'=>array('taare zmmen par','swades','chak de india', '3 idiots'));
echo '<br><br>';
echo $films['Hollywood'][2];
echo '<br><br>';
echo $films['Bollywood'][0];   //case sensitive
echo '<br><br>';

foreach($films as $wood => $list){
	echo '<br><strong>'.$wood.'</strong>';
	foreach($list as $finalLIST){
		echo '<br>'.$finalLIST;
	}
}

?>



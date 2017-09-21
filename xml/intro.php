<?php
$xml = simplexml_load_file('example.xml');

foreach( $xml->producer as $producer) {
	echo $producer->name.'('.$producer->sport.') <br>';

	foreach($producer->championships as $champ){
		echo $champ->League.' League tiltes and '.$champ->CL.' CL titles <br><br><br>';
	}
}

?>
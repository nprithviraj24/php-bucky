<?php

function hit_counter(){
	$filename = "count.txt";
	$handle = fopen($filename,"r");
	$read = fread($handle, filesize($filename));
	fclose($handle);

	$count_inc = $read + 1;

	$handle = fopen($filename,'w');
	fwrite($handle, $count_inc);
	fclose($handle);
}


function UNIQUE_hitCounter(){


	$ip_address = $_SERVER['REMOTE_ADDR'];

	$ip_file = file('ip.txt');  //variabler ip_file will be an array

	foreach($ip_file as $ip){
		$ip_single = trim($ip);
		if($ip_address != $ip_single){
			$found = true;
			break;
		} else {
			$found = false;
		}
	}

  if($found == false){
	$filename2 = "count2.txt";
	$handle2 = fopen($filename2,"r");
	$read2 = fread($handle2, filesize($filename2));
	fclose($handle2);

	$count_inc2 = $read2 + 1;

	$handle2 = fopen($filename2,'w');
	fwrite($handle2, $count_inc2);
	fclose($handle2);

	$handle2 = fopen('ip.txt', 'a');
	fwrite($ip_address);
	}

}

?>
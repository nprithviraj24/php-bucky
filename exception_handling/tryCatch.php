<?php

$age = 16;

try{
		if($age>18){
		echo 'Old enough';
		}else{
			throw new Exception('Not old enough');
		}

} catch (Exception $example){
	echo 'Error: '.$example->getMessage();
}


?>
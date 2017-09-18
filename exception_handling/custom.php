<?php

$c = @mysqli_connect('localhost','root','','ajax');
$db = @mysqli_select_db($c, 'aj');


class ServerException extends Exception {

	public function showSpecific(){
		return '<strong>SERVER_EXCEPTION</strong>: Error thrown at line '.$this->getLine().' in <strong>'.$this->getFile().'</strong>';
	}
}
class DatabaseException extends Exception {

	public function showSpecific(){
		return '<strong>DATABASE_EXCEPTION</strong>: Error thrown at line '.$this->getLine().' in <strong>'.$this->getFile().'</strong>';
	}
}

try{
	if(!$c){
		throw new ServerException('Could not connect to SERVER.');
	} else if(!$db){
		throw new DatabaseException('Could not connect to database');
	}  else {
		echo 'Connected';
	}


} catch(DatabaseException $example) {
	echo $example->showSpecific();
} catch(ServerException $ex){
	echo $ex->showSpecific();
}

?>
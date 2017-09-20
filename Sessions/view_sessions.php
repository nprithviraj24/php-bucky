<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['age']) ){
echo 'Welcome '.$_SESSION['username']. ' You are '.$_SESSION['age'].' !';
} else{
	echo 'Please log in';
}
//if we open view_session first, it will request us to log in. but if we open set_sessions and then view session,.. it will display Welcome Prithvi

?>
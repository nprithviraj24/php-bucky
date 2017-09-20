<?php
session_start();

$_SESSION['username']='Prithvi';
$_SESSION['age'] = '19';


echo ' Remember view_session works only when set_session is opened first. If unset is opened.. then it will again show the login page.'  

?>
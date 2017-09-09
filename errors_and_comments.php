outside to check error reporting
<br />
<?php
error_reporting(0);   //not working 
ini_set('error_reporting' , 0);  //not working. 

echo 'if you have to check any error then go to php.ini file in php folder of xampp and find error_reporting in that file.  <br />'
//;  // without semicolon, browser will show error

echo 'this is done using php.ini file.'
/*   Its is suggested that error_reporting should be 0 after product is finished  */


?>
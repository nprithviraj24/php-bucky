<?php

$password = "asdfghjkl";

$filename = "hash.txt";
$handle = fopen($filename, "w");
$md5 = md5($password);
fwrite($handle , $md5);
?>
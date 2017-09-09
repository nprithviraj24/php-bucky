<?php ob_start(); ?>

<h1> Nigg page</h1>
<?php
echo 'http://google.com<br><br>';
$redirect_page = 'http://google.com';
$rand = rand(0,2);
echo '<br><br>'.$rand.'<br><br>';
if($rand==1){
header('Location: '.$redirect_page);
}

ob_end_flush();
 //ob_end_clean();
echo ' <br><br><br> Thank you!!' ;
// Without ob() (clean, flush, start etc) functions, page will show error that the 1st header has already been use so page cant redirect to google.com
?>
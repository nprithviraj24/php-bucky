<?php
echo $time = time(); //amount of seconds from jan 1, 1970
$day = date('d D  M Y @ H:i:s', $time);
echo '<br>'.$day.'<br>';
echo '<br>'.$time_actual_modified = date('H:i:s', $time);
echo '<br>minus 60 seconds to actual time '.$time_actual_modified = date('H:i:s', $time-(7*24*60); //manipulating the time
// date() takes two arguments. 1st - how i want to display/ 2nd timestamp.

echo '<br>1 week 2 hours 30 seconds is added to actual time '.$time_actual_modified2 = date('d M Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds')); //even 1 week would suffice

 

?> 
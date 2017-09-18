<?php
// w - writing
// r - reading
//a - append

$handle_2 = fopen('CLEVELANDroster.txt','w');
$handle = fopen('nba.txt','w');  // 2 args. 1st - name  2nd - opening mode (w/r/a)

  fwrite( $handle, 'Cleveland Cavs'."\r\n" );  //double quotes neccesaary \r\n means next line
fwrite( $handle, 'GoldenState Warriors'."\r\n" );
fwrite( $handle, 'Miami Heat'."\r\n" );

fclose( $handle );


fwrite( $handle_2, 'Lebron James'.", " );
fwrite( $handle_2, 'Kyrie Irving'.", " );
fwrite( $handle_2, 'Kevin Love'.", " );
fwrite( $handle_2, 'Imam Shumpert'.", " );
fwrite( $handle_2, 'J.R Smith');
fclose($handle_2);

echo '<br>Written. DONE!';
?>
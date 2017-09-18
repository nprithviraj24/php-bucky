<?php 


$directory  = 'directory';
if($handle = opendir($directory.'/')){
	echo '<br><br>'.'Looking inside \''.$directory.'\'<br>';

	while($file = readdir($handle)){
		if($file != '.' && $file != '..'){   //if statement becuse one dot and double dots are part of normal directory structure and we dont want to include them. one dot: current directory and double dot: is back directory
			echo '<br><a href="'.$directory.'/'.$file.'">'.$file.'</a>';
		}
	}
}

// how to generate random name for image like fb images
?> 
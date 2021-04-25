<?php 

	  $myFiles = fopen("newfile.txt", "r") or die("NOT FOUND");

	  echo fread($myFiles, filesize("newfile.txt"));
	  fclose($myFiles);

?> 
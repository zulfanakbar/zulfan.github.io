<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	$myFile = "tesFile.txt";
	$fh = fopen($myFile, 'r');
	$theData = fgets($fh);
	fclose($fh);
	echo $theData;
	?>


</body>
</html>
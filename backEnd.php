<?php
if ($_POST['pass'] == 'teste' ) 
	echo "Welcome";
else
	header('Location:frontEnd.html');

$command = escapeshellcmd('C:\Users\frana\Documents\CRYPTOHUeEU\Main.py');
$output = shell_exec($command);
echo $output;
 ?>
<?php

	$emailSubject = 'New card request';
	$webMaster = 'computeressentialsweb@gmail.com';

	/* Use id's to refrences these elements*/

	$fnameField = $_POST['First Name'];
	$lnameField = $_POST['Last Name'];
	$emailField = $_POST['Email'];

	$body = <<<EOD
<br><hr><br>
FName: $fnameField <br>
LName: $lnameField <br>
Email: $emailField <br>
EOD;

	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);

	

?>
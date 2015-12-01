<?php

$to = 'ComputerEssentialsweb@gmail.com';
$subject = 'new card request';

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$message = <<<Content

$fname
$lname
$email

Content;

$header = '$email';


if($_POST){
	mail($to, $subject, $message, $header);
	$feedback = 'your email has been sent';
}

?>
<?php

$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
  'Reply-To: webmaster@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);
var_dump($result);

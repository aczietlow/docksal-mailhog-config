<?php

$to      = 'aczietlow@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: zitlow@gmail.com' . "\r\n" .
  'Reply-To: zitlow@gmail.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);
var_dump($result);

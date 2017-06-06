<?php

$to = 'test@mailhog.local';
$subject = 'Test message';
$message = 'Test message.';
$headers = 'Some content!' . "\r\n" .
  'Reply-To: test@mailhog.local' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
$result = mail($to, $subject, $message, $headers);
var_dump($result);

<body bgcolor="black">
<?php
$name = "Check Deliver Mail";
$to = "ewart-smith@hotmail.com"; //Change with your email
$web="$_SERVER[HTTP_HOST]";
$subject = "Success to Deliver Result";
$body = '
<a href="https://wikipedia.org/">Hello I am Here!</a>
';
$email = "Check@$web";
$headers = 'From: ' .$email . "\r\n".
$headers = "Content-type: text/html\r\n";
  'Reply-To: ' . $email. "\r\n" .
  'X-Mailer: PHP/' . phpversion();
if (mail($to,$subject,$body,$headers,$name)) {
  echo("<font color=lime>Email Sended To => $to </font>");
 } else {
  echo("<font color=red>Mail Not Supported!</font>");
 }
?>
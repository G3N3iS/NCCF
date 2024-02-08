<?php
$name =$_POST[ 'name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'http://127.0.0.1:5500/images/About.html'

$email_subject = 'New form submission'

$email_body = "user_name: $name.\n".
"user_email: $visitor_email.\n".
"subject: $subject.\n".
"user_message: $message.\n";

$to = 'eakaluese@yahoo.com';

$headers = "From: $email_from\r\n"

$headers .= "Reply-to: $visitor_email \r\n"

email($to,$email_subject,$email_body,$headers)

header("location: Contact.html")
?>
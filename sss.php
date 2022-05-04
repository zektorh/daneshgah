<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Subnission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $Subject.\n".
                "User Message: $message.\n";



$to = 'hosseinazimi735@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$sheaders);

header("Location: contact.html");


?>
<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'ag5416106@gmail.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'ag5416106@gmail.com'

$header = "From: $email_from \r\n"

$header .= "Replay-To:  $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html");

?>
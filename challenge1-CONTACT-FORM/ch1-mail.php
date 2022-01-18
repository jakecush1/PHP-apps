<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$callback_yes = $_POST['callback-yes'];
$callback_no = $_POST['callback-no'];
$website = $_POST['website'];
$urgency = $_POST['urgency'];
$type = $_POST['type'];
$message = $_POST['message'];

$formcontent =   
"
Urgency: $urgency \n
Type: $type \n
callback yes?: $callback_yes \n
callback no?: $callback_no \n
From: $name \n
Phone: $phone \n
Website: $website \n
Message: $message \n";

$recipient = "jakecushway96@gmail.com";
$subject = "Contact Form";
$mailheader = "Mail From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
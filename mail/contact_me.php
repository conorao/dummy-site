<?php
// Check for empty fields
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) 	||
    empty($_POST['message'])	|| !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	  echo "Arguments are invalid";
	  return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'conor@jebbit.com';
$email_subject = "Contact Message from: $name";
$email_body = "New message! \n\n";
$email_body .= "Here are the details:\n\n";
$email_body .= "Name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@test.jebbird.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>

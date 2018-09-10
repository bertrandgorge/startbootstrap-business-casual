<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
   
// Create the email and send the message
$to = 'stephanie@osmeea.com';
//$to = 'bertrand.gorge@gmail.com'; // debug

$email_subject = "OSMEEA - demande de contact :  $name";
$email_body = "Vous avez un nouveau message.\n\n"."Nom : $name\n\nEmail : $email_address\n\nTéléphone : $phone\n\nMessage :\n$message";
$headers = "From: no-reply@osmeea.com\n"; // This is the email address the generated message will be from. We recommend using something like no-reply@1001patrimoines.fr.
$headers .= "Reply-To: $email_address";   
mail($to, $email_subject, $email_body, $headers);
return true;         

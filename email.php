<?php
$to = 'wellerso@hotmail.com';
$subject = 'NEXT | CONTATO LANDING PAGE';
$from = 'welle.samu@gmail.com';
 
// Compose a simple HTML email message
$message = 'TESTE'; 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
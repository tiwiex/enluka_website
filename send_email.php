<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];


  // Set sender email address
$fromEmail = 'enquiries@enluka.org.uk';
$fromName = 'Enluka Consulting Enquiries';

// Set email headers
$headers = "From: $fromName <$fromEmail>" . "\r\n";
$headers .= "Reply-To: $name <$email>" . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

  $to = "tiwiex@gmail.com"; // Replace with your email address
  $to = "enquiries@enluka.org.uk"; // Replace with your email address
  $body = "Name: $name\nEmail: $to\nSubject: $subject\nMessage: $message\nFrom: $subject\nMessage: $fromEmail";
  #$headers = "From: $email";

  if (mail($email, $subject, $body, $headers)) {
    echo "Email sent successfully! from ", $body, $fromEmail ;
  } else {
    echo "Error sending email.";
  }
}
?>


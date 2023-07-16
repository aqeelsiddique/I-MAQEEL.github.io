<?php
// Get form input values
$name = $_POST['nameContact'];
$email = $_POST['emailContact'];
$message = $_POST['messageContact'];

// Admin email address
$adminEmail = "aqeelsaddique83@gmail.com"; // Replace with the actual admin email

// Email subject
$subject = "New Contact Form Submission";

// Email content
$content = "Name: $name\n";
$content .= "Email: $email\n";
$content .= "Message: $message\n";

// Send email
$headers = "From: $email";
if (mail($adminEmail, $subject, $content, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>

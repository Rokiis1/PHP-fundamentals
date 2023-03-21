<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate the data
    if (empty($name) || empty($email) || empty($message)) {
        die('Please fill out all required fields.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Please enter a valid email address.');
    }

    // Set the SMTP server and port
    ini_set("SMTP", "mail.example.com");
    ini_set("smtp_port", "587");

    // Send the email
    $to = 'youremail@example.com';
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        // Display a success message
        echo 'Thank you for your message!';
    } else {
        // Display an error message
        echo 'There was a problem sending your message. Please try again later.';
    }
} else {
    die('Invalid request.');
}

?>

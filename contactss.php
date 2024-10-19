<?php
echo 'hi';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Check if any of the required fields are empty
    if (!$name || !$number || !$email || !$message) {
        echo 'All fields are required.';
        exit;
    }

    // Email details
    $adminEmail = 'shehryarshahid81811@gmail.com'; // Admin email
    $subject = 'New Get in Touch Form Submission';

    // Email to Admin
    $adminMessage = "
    You have received a new message from the Get in Touch form on your website.

    Name: $name
    Number: $number
    Email: $email
    Message: $message
    ";

    // Email to User
    $userSubject = 'Thank you for getting in touch!';
    $userMessage = "
    Hi $name,

    Thank you for reaching out to us. We have received your message and will get back to you soon.

    Your Message:
    $message

    Best regards,
    The Team
    ";

    // Headers for the emails
    $headers = "From: noreply@example.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email to admin
    if (mail($adminEmail, $subject, $adminMessage, $headers)) {
        // Send confirmation email to user
        mail($email, $userSubject, $userMessage, $headers);
        echo 'Thank you for getting in touch!';
    } else {
        echo 'There was an error sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>

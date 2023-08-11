<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose the email
    $to = "Justinemsengi@gmail.com"; // Your email address
    $headers = "From: $email";
    $email_subject = "New Message: $subject";
    $email_body = "You have received a new message from $name.\n\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Redirect back to the form or display a success message
    header("Location: your-thank-you-page.html");
    exit;
}
?>

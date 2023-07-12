<?php
function sendEmail($recipients) {
    $to = implode(",", $recipients);
    $subject = "Test email";
    $message = "This is a test email sent from PHP.";
    $headers = "From: srilekhaganagalla@gmail.com" . "\r\n" .
        "Reply-To: srilekhaganagalla@gmail.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
}
?>
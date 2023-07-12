<?php
include 'send_email_function.php';
sendEmail($recipients);
echo "Email sent to " . count($recipients) . " recipients.";
?>
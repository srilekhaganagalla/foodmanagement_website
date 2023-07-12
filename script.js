function sendEmails() {
    // Send an AJAX request to the PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'send_emails.php');
    xhr.send();
    alert('Emails sent!');
}

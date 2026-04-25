<?php
// 1. Accept POST only
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Method Not allowed');
}

// 2. Basic sanitation
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    exit('Please fill in the form correctly.');
}

// 3. Compose the email
$to      = 'wsamson630@gmail.com';             // change to your inbox
$subject = 'New message from website';
$headers = "From: {$name} <{$email}>\r\n" .
           "Reply-To: {$email}\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";
$body    = <<<TXT
You’ve received a new message from your website:

Name:    {$name}
Email:   {$email}

Message:
{$message}
TXT;

// 4. Send it
if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent! Thank you.';
} else {
    echo 'Sorry—mail failed. Please try again later.';
}
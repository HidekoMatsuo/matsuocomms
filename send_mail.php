<?php
// Simple contact form handler using PHP mail(). Replace recipient@example.com with your real address.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo 'Method Not Allowed';
  exit;
}

function safe($v){ return trim(htmlspecialchars($v, ENT_QUOTES, 'UTF-8')); }

$name = safe($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$message = safe($_POST['message'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
  http_response_code(400);
  echo 'Invalid input';
  exit;
}

// Prevent header injection
if (preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $email)) {
  http_response_code(400);
  echo 'Bad input';
  exit;
}

$to = 'hidekomiyach@gmail.com'; // <<-- REPLACE with your email
$subject = "Contact form: " . $name;
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";
$headers = "From: $name <$email>\r\n" .
           "Reply-To: $email\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
  header('Location: contact.html?sent=1');
  exit;
} else {
  header('Location: contact.html?sent=0');
  exit;
}

?>

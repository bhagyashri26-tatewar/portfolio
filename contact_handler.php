<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

$name = htmlspecialchars(trim($_POST["name"] ?? ""));
$email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST["message"] ?? ""));

// Basic validation
if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?status=error");
    exit();
}

$to = "btatewar3@gmail.com";    // <-- recipient (your email)
$subject = "New message from your portfolio";
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Recommended headers
$headers  = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Prevent header injection
if (preg_match("/[\r\n]/", $email) || preg_match("/[\r\n]/", $name)) {
    header("Location: index.php?status=error");
    exit();
}

if (mail($to, $subject, $body, $headers)) {
    header("Location: index.php?status=success");
} else {
    header("Location: index.php?status=error");
}
exit();
?>

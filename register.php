<?php
require_once 'vendor/autoload.php'; // Include PHPMailer library

use PHPMailer\PHPMailer\PHPMailer;

// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "bugdevs_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $verificationCode = rand(100000, 999999);

    // Insert user data into the database
    $query = "INSERT INTO users (username, email, password, verification_code) VALUES ('$username', '$email', '$password', '$verificationCode')";
    $mysqli->query($query);

    // Send verification email
    $mail = new PHPMailer();
    $mail->isSMTP();
    // Configure your SMTP settings here
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'email@example.com';
    $mail->Password = 'your_app_password';

    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress($email, $username);
    $mail->Subject = 'Email Verification';
    $mail->Body = "Your verification code is: $verificationCode";

    if ($mail->send()) {
        echo "Registration successful! Please check your email for verification.";
    } else {
        echo "Registration failed. Error: " . $mail->ErrorInfo;
    }

    $mail->smtpClose();
}

$mysqli->close();
?>

<?php
session_start();
require_once('assets/inc/db_connect.inc.php');

// sanitize form input
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
$confirm_password = trim($_POST['confirm_password'] ?? '');

// Validate required fields
if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    $_SESSION['error'] = "All fields are required.";
    header("Location: register.php");
    exit();
}

// Check if passwords match
if ($password !== $confirm_password) {
    $_SESSION['error'] = "Passwords do not match!";
    header("Location: register.php");
    exit();
}

// Hash the password after validation
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user into the database
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    $_SESSION['success'] = "Account created successfully! Please login.";
    header("Location: login.php");
    exit();
} else {
    $_SESSION['error'] = "Registration failed. Please try again.";
    header("Location: register.php");
    exit();
}

$stmt->close();
$conn->close();
?>

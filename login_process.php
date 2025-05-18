<?php
session_start();
require_once('assets/inc/db_connect.inc.php');

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    $_SESSION['error'] = "Invalid input. Please try again.";
    header("Location: login.php");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        $redirect = $_GET['redirect'] ?? 'index.php';
        header("Location: $redirect");
        exit();
    } else {
        $_SESSION['error'] = "Invalid Password! Please try again.";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid Username! Please try again.";
    header("Location: login.php");
    exit();
}

$stmt->close();
$conn->close();
?>

<?php
require_once('db_connect.inc.php');

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate input
    $name      = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $comment   = htmlspecialchars(trim($_POST['comment'] ?? ''));
    $rating    = intval($_POST['rating'] ?? 0);
    $location  = htmlspecialchars(trim($_POST['location'] ?? ''));
    $recommend = htmlspecialchars(trim($_POST['recommend'] ?? ''));
    $imagePath = filter_var(trim($_POST['image_url'] ?? ''), FILTER_SANITIZE_URL);

    // Check required fields
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $comment && $location && $recommend && $rating > 0) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO commentsform (name, email, comment, rating, image, location, recommend) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss", $name, $email, $comment, $rating, $imagePath, $location, $recommend);
        
        // Execute and clean up
        if ($stmt->execute()) {
            header('Content-Type: application/json');
            echo json_encode([
            "status" => "success",
            "name" => $name,
            "email" => $email,
            "location" => $location,
            "rating" => $rating,
            "recommend" => $recommend,
            "image_url" => $imagePath,
            "comment" => $comment,
            "date" => date("F j, Y, g:i a")
            ]);

        } else {
            echo "error";
        }

        $stmt->close();
    } else {
        echo "error"; // Something missing or invalid
    }
}
?>

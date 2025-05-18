<?php
require_once('db_connect.inc.php');

$comments = array();

// Correct SQL Query
$sql = "SELECT name, comment, rating, image, created_at FROM commentsform ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = [
            "name"       => $row["name"],
            "comment"    => $row["comment"],
            "rating"     => (int) $row["rating"],   // Force rating to integer
            "image_url"  => $row["image"],           // Map 'image' column to 'image_url'
            "created_at" => $row["created_at"]
        ];
    }
}

// Output JSON
header("Content-Type: application/json");
echo json_encode($comments, JSON_PRETTY_PRINT);
?>

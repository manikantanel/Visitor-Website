<?php
    $result = $conn->query("SELECT name, comment, rating, image FROM commentsform ORDER BY created_at DESC");

    $shown = [];

    while ($row = $result->fetch_assoc()) {
        $key = md5($row['name'] . $row['comment']);
        if (!isset($shown[$key])) {
            $shown[$key] = true;
            $stars = str_repeat("⭐", intval($row['rating']));

            echo "<div class='testimonial-slide'>";
            
            //  Image display
            if (!empty($row['image'])) {
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='User Image' style='max-width: 150px; margin-bottom: 10px;'><br>";
            }

            echo "<p>“" . nl2br(htmlspecialchars($row['comment'])) . "”</p>";
            echo "<p class='stars'>$stars <strong>" . htmlspecialchars($row['name']) . "</strong></p>";
            echo "</div>";
        }
    }
?>
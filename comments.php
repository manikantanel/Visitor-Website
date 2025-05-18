<?php
include("db_connect.php");

// FORM PROCESSING
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $comment = htmlspecialchars(trim($_POST['comment']));
    $rating = intval($_POST['rating']);
    $location = htmlspecialchars(trim($_POST['location']));
    $recommend = htmlspecialchars(trim($_POST['recommend']));
    $imagePath = htmlspecialchars(trim($_POST['image_url'] ?? '')); // New: image URL instead of file

    // Validate & insert
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($comment)) {
        $stmt = $conn->prepare("INSERT INTO commentsform (name, email, comment, rating, image, location, recommend) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss", $name, $email, $comment, $rating, $imagePath, $location, $recommend);
        $stmt->execute();
        $stmt->close();
        // ✅ Show thank you popup
        echo "<script>var showThankYou = true;</script>";
    } else {
        echo "<p style='color:red;'>Please fill out all required fields correctly.</p>";
    }
}
?>

<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
//   $contactPages = [
//     "historic-sites.php", "museums.php", "parks-nature.php",
//     "current-events.php", "annual-festivals.php",
//     "walking-tours.php", "carriage-rides.php", "audio-tours.php",
//     "hotels.php", "historic-inns.php", "restaurants.php"
//   ];
//   $formAction = in_array($currentPage, $contactPages) ? "contact.php" : "comments.php";
?>

<!-- ✍️ Comment Form -->
  <!-- ✍️ Enhanced Contact/Comment Form -->
  <section class="booking-section">
  <div class="booking-header">
    <h2> Leave a Comment</h2>
    <p>Have feedback, or want to share your experience? Fill out the form below.</p>
  </div>
  <div class="booking-form">
    <form name="commentForm" method="post" action="<?= $currentPage ?>" enctype="multipart/form-data" onsubmit="return validateForm();">
      <label>Name: <input type="text" name="name" placeholder="Your full name" required></label>
      <label>Email: <input type="text" name="email" placeholder="example@domain.com" required></label>
      <label>Comment:<br>
        <textarea name="comment" rows="5" cols="50" placeholder="Write your comment here..." required></textarea>
      </label>
      <label for="rating">Rating: <span id="ratingValue">3</span> ⭐</label>
      <input type="range" id="rating" name="rating" min="1" max="5" value="3" oninput="updateRating(this.value)">
      <label for="image_url">Image URL:</label>
      <input type="url" name="image_url" id="image_url" placeholder="https://example.com/image.jpg">
      <label>Location: <input type="text" name="location" placeholder="e.g. Williamsburg, VA" required></label>
      <label>Would you recommend this place?
        <input type="radio" name="recommend" value="Yes" checked> Yes
        <input type="radio" name="recommend" value="No"> No
      </label>
      <input type="submit" value="Submit Comment">
    </form>
  </div>
</section>


 <!-- Display Previous Comments as Testimonials with Pagination and Stars -->
 <div class="testimonial-wrapper">
  <section class="testimonials-slider">
    <h2>What Visitors Say</h2>
    <div class="testimonial-slider-container">
      <button class="slider-btn" id="prevBtn">←</button>
      <div class="testimonial-track" id="testimonialTrack">
      <?php
            include("previouscomment.php")
      ?>
      </div>
      <button class="slider-btn" id="nextBtn">→</button>
    </div>
    <div class="dots" id="dotsContainer"></div>
  </section>
</div>

<div id="thankYouOverlay">
  <div id="thankYouOverlayContent">
    <h2>🎉 Thank You!</h2>
    <p>Thank you for submitting the comments.</p>
    <button onclick="closeOverlay()">Done</button>
  </div>
</div>

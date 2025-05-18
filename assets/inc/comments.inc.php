<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once('db_connect.inc.php');
include('validations.php');

$pageTitle = "Visitor Comments";
?>
<!-- Leave a Comment Form -->
<section class="booking-section">
  <div class="booking-header">
    <h2>Leave a Comment</h2>
    <p>Share your experience with us!</p>
  </div>

  <div class="booking-form">
    <form id="commentForm" method="POST" onsubmit="return submitCommentForm();">

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your full name"
            value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="yourname@example.com"
            value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>

      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" rows="5" placeholder="Comment here..." required></textarea>

      <label for="rating">Rating: <span id="ratingValue">3</span> ⭐</label>
      <input type="range" id="rating" name="rating" min="1" max="5" value="3"
            oninput="ratingValue.innerHTML = this.value">

      <label for="image_url">Image URL: (optional)</label>
      <input type="url" id="image_url" name="image_url" placeholder="https://example.com/image.jpg">

      <label for="location">Location:</label>
      <input type="text" id="location" name="location" placeholder="Location..." required>

      <fieldset>
        <legend>Recommend:</legend>
        <input type="radio" id="recommend-yes" name="recommend" value="Yes" checked>
        <label for="recommend-yes">Yes</label>

        <input type="radio" id="recommend-no" name="recommend" value="No">
        <label for="recommend-no">No</label>
      </fieldset>

      <input type="submit" name="submit" value="Submit Comment">
    </form>
  </div>
</section>

<!-- Testimonials Section -->
<div class="testimonial-wrapper">
  <section class="testimonials-slider">
    <h2>What Visitors Say</h2>
    <div class="testimonial-slider-container">
      <button class="slider-btn" id="prevBtn">←</button>
      <div class="testimonial-track" id="testimonialTrack">
        <!-- Testimonials will load dynamically -->
      </div>
      <button class="slider-btn" id="nextBtn">→</button>
    </div>
    <div class="dots" id="dotsContainer"></div>
  </section>
</div>

<!-- Thank You Overlay -->
<div id="thankYouOverlay" role="dialog" aria-modal="true" style="display: none;">
  <div id="thankYouOverlayContent">
    <h2>🎉 Thank You!</h2>
    <div id="overlayMessage">
      <!-- Success message and submitted comment will be injected here -->
    </div>
    <button type="button" onclick="closeOverlay()">Done</button>
  </div>
</div>

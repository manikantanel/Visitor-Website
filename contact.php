<?php
$pageTitle = "Contact"; 
require_once('assets/inc/header.inc.php');
?>

    
<!-- Hero Section -->
<section class="hero-section">
      <div class="hero-overlay">
          <h1>Contact Us</h1>
      </div>
      <img src="assets/images/Contact_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
  </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <span>Contact Us</span>
    </nav>

<main>

  <section class="booking-section">
    <div class="booking-header">
      <h2>Contact Us</h2>
      <p>If you have any questions, or concerns, feel free to reach out to us using the form below. We’re here to help!</p>              
      </div>
      <div class="booking-form">
        <form action="confirmation_contact.php" method="post" id="contact-form">
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" placeholder="Your Name" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required>

                <label for="email">Email Address:</label>
                <input type="email" id="contact-email" name="email" placeholder="yourname@example.com" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Subject of Your Inquiry" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" placeholder="Enter your message here..." required></textarea>

                <input type="submit" value="Send Message">
        </form>
      </div>       
  </section>

  <?php require_once('assets/inc/comments.inc.php'); ?>

  <!-- FAQ Section -->
  <section class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq">
                <h3>What is Colonial Williamsburg?</h3>
                <p>Colonial Williamsburg is a living-history museum that recreates 18th-century Virginia, showcasing historic buildings, reenactments, and interactive exhibits.</p>

                <h3>What are the operating hours?</h3>
                <p>Most historic sites are open daily from 9:00 AM to 5:00 PM, though hours may vary depending on the season.</p>

                <h3>Do I need to purchase tickets in advance?</h3>
                <p>While walk-in tickets are available, purchasing in advance is recommended, especially during peak seasons.</p>
            </div>
        </section>

        <!-- Quote Section -->
        <div class="quote-section">
            <blockquote>
                "The past is never dead. It’s not even past." – William Faulkner
            </blockquote>
        </div>

 
        
  <!-- Back to Top Link -->
  <a href="#main-header" class="back-to-top">Back to Top</a>
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>



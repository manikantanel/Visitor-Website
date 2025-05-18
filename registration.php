<?php
$pageTitle = "Registration"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay">
        <h1>Registartion</h1>
    </div>
    <img src="assets/images/Registration_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
</section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Registration</span>
    </nav>

<main>
        <section class="booking-section">
            <div class="booking-header">
                <h2>Register for an Event or Tour</h2>
                <p>Complete the form below to register for events or guided tours in Williamsburg. Once registered, you will receive a confirmation and payment details.</p>
            </div>
            <div class="booking-form">
                <form action="confirmation_registration.php" method="post" id="registration-form">
                    <label for="event-name">Select Event or Tour:</label>
                    <select id="event-name" name="event-name" required>
                        <option value="" disabled selected>Select a event category</option>
                        <option value="Colonial Life Walking Tour">Colonial Life Walking Tour</option>
                        <option value="Ghosts of Williamsburg Evening Tour">Ghosts of Williamsburg Evening Tour</option>
                        <option value="Grand Illumination Festival">Grand Illumination Festival</option>
                        <option value="Virginia Arts Festival">Virginia Arts Festival</option>
                    </select>

                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Your Name" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="yourname@example.com" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>


                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="(000)-000-0000" required 
                    pattern="\(\d{3}\)-\d{3}-\d{4}" title="Format: (000)-000-0000">


                    <label for="preferences">Special Preferences or Requests (Optional):</label>
                    <textarea id="preferences" name="preferences" rows="4" placeholder="Let us know if you have any special requirements..."></textarea>

                    <label for="payment-method">Select Payment Method:</label>
                    <select id="payment-method" name="payment-method" required>
                        <option value="" disabled selected>Select a payment method</option> <!-- Placeholder option -->
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="PayPal">PayPal</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Cash">Cash</option>
                        <option value="Apple Pay">Apple Pay</option>
                        <option value="Google Pay">Google Pay</option>
                    </select>


                    <input type="submit" value="Submit Registration">
                </form>
            </div>
        </section>
    </main>

    <?php require_once('assets/inc/footer.inc.php'); ?>
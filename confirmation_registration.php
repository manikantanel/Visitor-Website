<?php
$pageTitle = "Registration Confirmation"; 
require_once('assets/inc/header.inc.php');
require_once('assets/inc/db_connect.inc.php');

// Sanitize form inputs
$name = htmlspecialchars(trim($_POST['full-name']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$event = htmlspecialchars(trim($_POST['event-name']));
$phone = htmlspecialchars(trim($_POST['phone']));
$preferences = htmlspecialchars(trim($_POST['preferences']));
$payment = htmlspecialchars(trim($_POST['payment-method']));

// Insert into database
$stmt = $conn->prepare("INSERT INTO eventregistrations (name, email, phone, event_name, preferences, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $event, $preferences, $payment);
$stmt->execute();
$stmt->close();
$conn->close();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay">
        <h1>Confirmation</h1>
    </div>
    <img src="assets/images/Confirmation_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
</section>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb">
    <a href="index.php">Home</a> &gt; <span>Confirmation</span>
</nav>

<main>
  <section class="welcome-attraction-section">
    <h1>Thank You, <?php echo $name; ?>!</h1>
    <p>Your registration for <strong><?php echo $event; ?></strong> is confirmed.</p>
    <p>We've recorded your contact number as <strong><?php echo $phone; ?></strong>.</p>
    <p>Preferred payment method: <strong><?php echo $payment; ?></strong></p>

    <?php if (!empty($preferences)) : ?>
    <p><strong>Special Request:</strong> <?php echo $preferences; ?></p>
    <?php else : ?>
    <p><strong>Note:</strong> No special preferences submitted.</p>
    <?php endif; ?>

    <p>Confirmation has been sent to your email: <strong><?php echo $email; ?></strong></p>

    <a href="events.php" class="ticket-button">&larr; Back to Events</a>
  </section>
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>

<?php
$pageTitle = "Confirmation"; 
require_once('assets/inc/header.inc.php'); 
require_once('assets/inc/db_connect.inc.php');

// Sanitize form inputs
$name = htmlspecialchars(trim($_POST['full-name']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$category = htmlspecialchars(trim($_POST['ticket-category']));
$tickets = intval($_POST['number-of-tickets']);
$date = htmlspecialchars(trim($_POST['date']));
$requests = htmlspecialchars(trim($_POST['special-requests']));

// Insert into database using prepared statements
$stmt = $conn->prepare("INSERT INTO ticketbookings (name, email, category, tickets, date, requests) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $name, $email, $category, $tickets, $date, $requests);
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
        <p>Your ticket booking has been received.</p>
        <p><strong>Category:</strong> <?php echo $category; ?> | <strong>Tickets:</strong> <?php echo $tickets; ?></p>
        <p><strong>Date of Visit:</strong> <?php echo $date; ?></p>

        <?php if (!empty($requests)) : ?>
            <p><strong>Special Requests:</strong> <?php echo $requests; ?></p>
        <?php else : ?>
            <p><strong>Note:</strong> No special requests provided.</p>
        <?php endif; ?>

        <p>We have sent a confirmation to your email: <strong><?php echo $email; ?></strong></p>

        <a href="index.php" class="ticket-button">← Back to Home</a>
    </section>
</main>

<?php include('assets/inc/footer.inc.php'); ?>

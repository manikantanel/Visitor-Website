<?php
    $pageTitle = "Confirmation_contact"; 
   require_once('assets/inc/header.inc.php');
   require_once('assets/inc/db_connect.inc.php');

    $name = htmlspecialchars(trim($_POST["full-name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));


    $stmt = $conn->prepare("INSERT INTO contactmessages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

?>

<!-- Hero Section with Full-Screen Video -->
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
            <h1>Hi, <?php echo $name; ?>! 🎉</h1>
            <p>Thank you for contacting us, we will shortly send you back an email. 💌</p>

            <div class="confirmation-box">
                <p><strong>Subject:</strong> <?php echo $subject; ?></p>
                <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
                <p>📧 A copy has been sent to: <strong><?php echo $email; ?></strong></p>
            </div>

            <a href="contact.php" class="ticket-button">← Back to Contact Page</a>
        </section>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>

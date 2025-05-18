<?php
    $pageTitle = "Confirmation"; 
    require_once('assets/inc/header.inc.php');
    require_once('assets/inc/db_connect.inc.php');

    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $accommodation = htmlspecialchars(trim($_POST['accommodation']));
    $checkin = htmlspecialchars(trim($_POST['checkin']));
    $checkout = htmlspecialchars(trim($_POST['checkout']));
    $preferences = htmlspecialchars(trim($_POST['preferences']));
    

    $stmt = $conn->prepare("INSERT INTO hotelsbookings (name, email, accommodation, checkin, checkout, preferences) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $accommodation, $checkin, $checkout, $preferences);
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
        <h1>Thank You, <?php echo $name; ?>!</h1>
        <p>Your booking has been received.</p>
        <p>You have selected <strong><?php echo $accommodation; ?></strong>.</p>
        <p><strong>Check-in:</strong> <?php echo $checkin; ?> &nbsp; | &nbsp; <strong>Check-out:</strong> <?php echo $checkout; ?></p>

        <?php if (!empty($preferences)) : ?>
        <p><strong>Special Request:</strong> <?php echo $preferences; ?></p>
        <?php else : ?>
        <p><strong>Note:</strong> You didn't mention any special requests. Let us know if you have any!</p>
        <?php endif; ?>

        <p>We've sent a confirmation to your email: <strong><?php echo $email; ?></strong></p>

        <a href="hotels.php" class="ticket-button">← Back to Hotels</a>
    </section>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>

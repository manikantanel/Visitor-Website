<?php
require_once('assets/inc/db_connect.inc.php');
require_once('assets/inc/header.inc.php');

// Check if user is logged in
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$name = $_SESSION['username'];  // Logged-in user name
?>

<!-- Hero Section -->
<section class="hero-section">
      <div class="hero-overlay">
          <h1>Login</h1>
      </div>
      <img src="assets/images/Login_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
  </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="login.php">Login</a>
    </nav>

    <main>

    <section class="booking-section">
  <div class="booking-header">
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <p>Here is your profile information and booking history summary.</p>
  </div>

  <div class="booking-form">
    <div class ="form-note">
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>

        <!-- View Offers Button -->
        <p>As a valued Williamsburg Port Member, you get exclusive access to special deals and offers!</p>
        <a href="special-deals.php" class="ticket-button">View Offers</a>

        <!-- Ticket Booking History -->
        <h3>Ticket Bookings</h3>
        <?php
        $sql = "SELECT * FROM ticketbookings WHERE name='$name'";
        $result = $conn->query($sql);

        if($result && $result->num_rows > 0){
            echo "<ul>";
            while($row = $result->fetch_assoc()){
                echo "<li>{$row['category']} | {$row['tickets']} Ticket(s) | Date: {$row['date']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No Ticket Bookings Found.</p>";
        }
        ?>

        <!-- Hotel Booking History -->
        <h3>Hotel Bookings</h3>
        <?php
            $sql = "SELECT * FROM hotelsbookings WHERE name='$name'";
            $result = $conn->query($sql);

            if($result && $result->num_rows > 0){
                echo "<ul>";
                while($row = $result->fetch_assoc()){
                    echo "<li>{$row['accommodation']} | Check-in: {$row['checkin']} | Check-out: {$row['checkout']}</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No Hotel Bookings Found.</p>";
            }
            ?>
        <!-- Event Registration History -->
        <h3>Event Registrations</h3>
        <?php
            $sql = "SELECT * FROM eventregistrations WHERE name='$name'";
            $result = $conn->query($sql);

            if($result && $result->num_rows > 0){
                echo "<ul>";
                while($row = $result->fetch_assoc()){
                    echo "<li>Event: {$row['event_name']} | Phone: {$row['phone']} | Payment: {$row['payment_method']}</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No Event Registrations Found.</p>";
            }
            ?>

        <p><a href="logout.php" class="ticket-button">Logout</a></p>
  </div>
</div>
</section>

<!-- Back to Top Link -->
<a href="#main-header" class="back-to-top">Back to Top</a>
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>


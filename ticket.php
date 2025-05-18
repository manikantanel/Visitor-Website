<?php
$pageTitle = "Ticket"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay">
        <h1>Ticket</h1>
    </div>
    <img src="assets/images/Ticket_Hero_Section.jpg" alt="Ticket" class="hero-image">
</section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Ticket</span>
    </nav>

    <main>
        <section class="booking-section">
            <div class="booking-header">
                <h2>Book Your Tickets</h2>
                <p>Complete the form below to book tickets for attractions, events, or guided tours in Williamsburg.</p>
            </div>
            <div class="booking-form">
            <form action="confirmation_ticket.php" method="post" id="ticket-form">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" placeholder="Enter your full name"
                value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="yourname@example.com"
                value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>

            <label for="ticket-category">Select Ticket Category:</label>
            <select id="ticket-category" name="ticket-category" required>
                <option value="" disabled selected>Select a ticket category</option>
                <option value="Attraction Tickets">Attraction Tickets</option>
                <option value="Event Tickets">Event Tickets</option>
                <option value="Guided Tour Tickets">Guided Tour Tickets</option>
            </select>

            <label for="number-of-tickets">Number of Tickets:</label>
            <input type="number" id="number-of-tickets" name="number-of-tickets" min="1" max="10" required>

            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="special-requests">Special Requests (Optional):</label>
            <textarea id="special-requests" name="special-requests" rows="4"
                placeholder="Let us know if you have any special requirements..."></textarea>

            <input type="submit" value="Book Tickets">
        </form>

            </div>
        </section>
    </main>
<?php require_once('assets/inc/footer.inc.php'); ?>
<?php
$pageTitle = "Special Deals"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay">
        <h1>Special Deals offer hurry up</h1>
    </div>
    <img src="assets/images/Special_Deal_Hero_Section.jpg" alt="Special Hero Section" class="hero-image">
</section>



    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <span>Special Deals</span>
    </nav>

    <main>
        <section class="welcome-attraction-section">
            <h2>Special Offers and Discounts</h2>
            <p>Take advantage of our exclusive deals on tours, accommodations, and events. Book now and enjoy significant savings!</p>
        </section>

        <!--Family Pacakge discount-->
        <article class="attraction-detail odd">
            <h2>Family Package Discount</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Walking_tour_colonial_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Walking_tour_colonial_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Walking_tour_colonial_Desktop.jpg" alt="Walking Tour">
                </picture>
                <div class="text-content">
                    
                    <p>Enjoy family fun at a discounted rate with tickets to Williamsburg’s top attractions.</p>
                    <p><strong>Eligible For:</strong> Families of 4 or more</p>
                    <p><strong>Expiry Date:</strong> December 31, 2025</p>
                    <a href="registration.php" class="ticket-button">Claim This Deal</a>
                </div>
            </div>
        </article>

        <!--Stay 3 Nights Section-->
        <article class="attraction-detail even">
            <h2>Stay 3 Nights, Pay for 2</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Williamburg_Hotel_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Williamburg_Hotel_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Williamburg_Hotel_Desktop.jpg" alt="Williamsburg Hotel">
                </picture>
                <div class="text-content">
                    <p>Stay longer and save with this offer available at select hotels and inns.</p>
                    <p><strong>Eligible For:</strong> All guests</p>
                    <p><strong>Expiry Date:</strong> March 30, 2025</p>
                    <a href="registration.php" class="ticket-button">Claim This Deal</a>
                </div>
            </div>
        </article>


        <!--Group Discounts Section-->
        <article class="attraction-detail odd">
            <h2>Group Discounts on Guided Tours</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Cedar_Inn_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Cedar_Inn_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Cedar_Inn_Desktop.jpg" alt="Cedar Inn">
                </picture>
                <div class="text-content">
                    <p>Groups of 10 or more can enjoy discounted rates on guided tours of historic Williamsburg.</p>
                    <p><strong>Eligible For:</strong> Groups of 10+</p>
                    <p><strong>Expiry Date:</strong> Ongoing</p>
                    <a href="registration.php" class="ticket-button">Claim This Deal</a>
                </div>
            </div>
        </article>
    </main>
<?php require_once('assets/inc/footer.inc.php'); ?>
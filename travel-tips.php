<?php
$pageTitle = "Travel Tips"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Travel Tips & Tricks</h1>
            <p>Plan, pack, travel, explore, enjoy.</p>
        </div>
        <img src="assets/images/Travel_Tips_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Travel Tips</span>
    </nav>

    <main>
        <section class="welcome-attraction-section">
            <h1>Travel Tips for a Smooth Visit to Williamsburg</h1>
            <p><i>Whether you're visiting for the history or the scenery, our tips will help you make the most of your stay. From packing advice to transportation and local etiquette, we’ve got you covered.</i></p>
        </section>

        <article class="attraction-detail odd">
            <h2>Packing Tips for Colonial Williamsburg</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Tourism_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Tourism_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Tourism_Desktop.jpg" alt="Tourism">
                </picture>
                <div class="text-content">
                    
                    <p>Bring comfortable walking shoes, weather-appropriate clothing, and a refillable water bottle. Don’t forget sunscreen if you’re visiting in summer, as many tours take place outdoors.</p>
                    <p><strong>Category:</strong> Packing</p>
                    <a href="https://www.visitwilliamsburg.com" target="_blank" class="ticket-button">Learn More</a>
                </div>
            </div>
        </article>

        <article class="attraction-detail even">
            <h2>Getting Around Williamsburg</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Travel_activities_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Travel_activities_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Travel_activities_Desktop.jpg" alt="Tourism">
                </picture>
                <div class="text-content">
                    
                    <p>The Williamsburg Trolley is a convenient option to visit key attractions. Rental bikes are also popular for exploring local nature trails and parks.</p>
                    <p><strong>Category:</strong> Transportation</p>
                    <a href="https://www.visitwilliamsburg.com" target="_blank" class="ticket-button">Learn More</a>
                </div>
            </div>
        </article>

        <article class="attraction-detail odd">
            <h2>Understanding Local Customs and Culture</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Artwork_CW_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Artwork_CW_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Artwork_CW_Desktop.jpg" alt="Artwork">
                </picture>
                <div class="text-content">
                    
                    <p>Visitors often enjoy traditional colonial meals at local taverns. Be sure to check local event calendars for opportunities to see historical reenactments.</p>
                    <p><strong>Category:</strong> Local Culture</p>
                    <a href="https://www.history.org" target="_blank" class="ticket-button">Learn More</a>
                </div>
            </div>
        </article>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>
<?php require_once('assets/inc/footer.inc.php'); ?>
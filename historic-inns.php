<?php
$pageTitle = "Historic Inns"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Your Luxury Hotel Escape</h1>
            <p>Sleep, dine, relax, and rejuvenate.</p>
        </div>
        <img src="assets/images/Williamsburg_Inn.jpeg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="accommodations.php">accommodations</a> &gt;
        <span>Historic Inn</span>
    </nav>

    <main>
        <!-- Image Viewer with Caption -->
        <div id="image-viewer" class="image-viewer" style="display: none;">
            <button class="close-btn" onclick="closeImage()">✖</button>
            <button id="prev-btn" class="nav-btn left-arrow">&#10094;</button>
            <figure>
                <img id="viewer-img" src="assets/images/accomodation.png" alt="Full Screen Image">
                <figcaption id="viewer-caption"></figcaption>
            </figure>
            <button id="next-btn" class="nav-btn right-arrow">&#10095;</button>
        </div>

        <section class="welcome-attraction-section">
            <h1>Top Historic Inns in Williamsburg</h1>
            <p><i>Stay at beautiful inns offering a mix of colonial charm and modern comfort.</i></p>
        </section>

        <article id="Cedar" class="attraction-detail odd">
            <h2>The Cedars of Williamsburg Bed & Breakfast Inn</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Cedar_Inn_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Cedar_Inn_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Cedar_Inn_Desktop.jpg" alt="Cedar">
                </picture>
                <div class="text-content">
                    
                    <p>Stay at The Cedars of Williamsburg, a historic bed and breakfast offering charming rooms, serene gardens, and easy access to Williamsburg attractions.</p>
                    <p><strong>Elegant, comfortable lodging in Virginia’s colonial capital</strong></p>
                    <p><strong>Address:</strong> 616 Jamestown Rd, Williamsburg, VA 23185</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons  -->
            <div class="amenities-icons">
                <h2 class="amenities-header">Amenities</h2>
                <div class="icons-row">
                    <div class="amenity">
                        <img src="assets/images/restuarant.png" alt="In House Restaurant">
                        <p>In House Restaurant</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/spa.png" alt="Full Service Spa">
                        <p>Full Service Spa</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/golf-player.png" alt="Golf">
                        <p>Golf</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/weight.png" alt="Fitness Center">
                        <p>Fitness Center</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/swimming.png" alt="Pool">
                        <p>Pool</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/wedding-rings.png" alt="Wedding & Celebrations">
                        <p>Wedding & Celebrations</p>
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Explore the interior</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/William_Room_Cedar_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/William_Room_Cedar_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/William_Room_Cedar_Desktop.jpg" alt="William Room Cedar">
                        </picture>
                        <figcaption>William Lee Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Martha_Cedar_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Martha_Cedar_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Martha_Cedar_Desktop.jpg" alt="Martha">
                        </picture>
                        <figcaption>Martha Washington Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/George_Cedar_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/George_Cedar_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/George_Cedar_Desktop.jpg" alt="George">
                        </picture>
                        <figcaption>George Washington Suite</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/King_Cedar_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/King_Cedar_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/King_Cedar_Desktop.jpg" alt="King">
                        </picture>
                        <figcaption>King William Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Rebecca_Cedar_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Rebecca_Cedar_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Rebecca_Cedar_Desktop.jpg" alt="Rebecca">
                        </picture>
                        <figcaption>Rebecca Rolfe Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Thomas_Cedar_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Thomas_Cedar_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Thomas_Cedar_Desktop.jpg" alt="Thomas">
                        </picture>
                        <figcaption>Thomas Jefferson Room</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of The Cedars of Williamsburg Bed & Breakfast Inn" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.2092610777886!2d-76.7184372249555!3d37.266464572117854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0899e86eb1fdb%3A0x5127fdc7219190b7!2s616%20Jamestown%20Rd%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740289822817!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>The Cedars of Williamsburg: Historic Charm & Cozy Comfort</h2>
                <p>
                    Experience The Cedars of Williamsburg, a charming bed and breakfast with serene gardens, historic elegance, and easy access to local attractions.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/y8J8tIudFtI" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="EwingHouse" class="attraction-detail odd">
            <h2>Ewing House</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Ewing_Shop_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Ewing_Shop_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Ewing_Shop_Desktop.jpg" alt="Ewing house">
                </picture>
                <div class="text-content">
                    
                    <p>Ewing Storehouse, a historic single-room dwelling, stands independently on E. Francis Street, next to the Ewing Shop, preserving colonial charm.</p>
                    <p><strong>Historic House</strong></p>
                    <p><strong>Address:</strong> 401 Francis St E, Williamsburg, VA 23185</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons  -->
            <div class="amenities-icons">
                <h2 class="amenities-header">Amenities</h2>
                <div class="icons-row">
                    <div class="amenity">
                        <img src="assets/images/restuarant.png" alt="In House Restaurant">
                        <p>In House Restaurant</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/spa.png" alt="Full Service Spa">
                        <p>Full Service Spa</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/golf-player.png" alt="Golf">
                        <p>Golf</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/weight.png" alt="Fitness Center">
                        <p>Fitness Center</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/swimming.png" alt="Pool">
                        <p>Pool</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/wedding-rings.png" alt="Wedding & Celebrations">
                        <p>Wedding & Celebrations</p>
                    </div>
                </div>
            </div>

            
            <section class="gallery-container">
                <h2>Explore the interior</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Queen_Bed_Ewing_House_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Queen_Bed_Ewing_House_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Queen_Bed_Ewing_House_Desktop.jpg" alt="Queen Bed Ewing House">
                        </picture>
                        <figcaption>Queen Bed</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bed_With_Chair_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bed_With_Chair_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bed_With_Chair_Desktop.jpg" alt="Bed With Chair">
                        </picture>
                        <figcaption>Bed with Chair</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Main_Door_Ewing_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Main_Door_Ewing_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Main_Door_Ewing_Desktop.jpg" alt="Main Door Ewing">
                        </picture>
                        <figcaption>Main Door</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Living_Ewing_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Living_Ewing_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Living_Ewing_Desktop.jpg" alt="Living">
                        </picture>
                        <figcaption>Living</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bathroom_Ewing_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bathroom_Ewing_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bathroom_Ewing_Desktop.jpg" alt="Living"> 
                        </picture>
                        <figcaption>Bathroom</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Storehouse_Ewing_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Storehouse_Ewing_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Storehouse_Ewing_Desktop.jpg" alt="Storehouse"> 
                        </picture>
                        <figcaption>Store house</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Ewing House" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.760567846526!2d-76.6972481304324!3d37.27042469825727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08906583c1261%3A0x7e38864c8aad2076!2s401%20Francis%20St%20E%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740291688540!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>A Historic Stay at Ewing Storehouse in Colonial Williamsburg</h2>
                <p>
                    Experience a unique stay at Ewing Storehouse in Colonial Williamsburg, dine at Christiana Campbell’s Tavern, and enjoy a charming evening stroll.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/tFzjr2yk6Gk" 
                    title="YouTube video player" 
                  
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="Armistead" class="attraction-detail odd">
            <h2>Armistead House</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Armistead_House_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Armistead_House_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Armistead_House_Desktop.jpg" alt="Armistead House">
                </picture>
                <div class="text-content">
                    
                    <p>Stay at Armistead House, steps from Colonial Williamsburg, with private parking, easy access to museums, shops, restaurants, and historic charm.</p>
                    <p><strong>Historic House</strong></p>
                    <p><strong>Address:</strong> 320 N Henry St, Williamsburg, VA 23185</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons  -->
            <div class="amenities-icons">
                <h2 class="amenities-header">Amenities</h2>
                <div class="icons-row">
                    <div class="amenity">
                        <img src="assets/images/restuarant.png" alt="In House Restaurant">
                        <p>In House Restaurant</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/spa.png" alt="Full Service Spa">
                        <p>Full Service Spa</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/golf-player.png" alt="Golf">
                        <p>Golf</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/weight.png" alt="Fitness Center">
                        <p>Fitness Center</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/swimming.png" alt="Pool">
                        <p>Pool</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/wedding-rings.png" alt="Wedding & Celebrations">
                        <p>Wedding & Celebrations</p>
                    </div>
                </div>
            </div>
            
            <section class="gallery-container">
                <h2>Explore the interior</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Dickens_Armistead_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Dickens_Armistead_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Dickens_Armistead_Desktop.jpg" alt="Dickens Armistead">
                        </picture>
                        <figcaption>Dickens Suite</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Shelley_Armistead_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Shelley_Armistead_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Shelley_Armistead_Desktop.jpg" alt="Shelley Armistead">
                        </picture>
                        <figcaption>Shelley Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Darwin_Armistead_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Darwin_Armistead_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Darwin_Armistead_Desktop.jpg" alt="Darwin Armistead">
                        </picture>
                        <figcaption>Darwin Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Darwin_Armistead_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Darwin_Armistead_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Darwin_Armistead_Desktop.jpg" alt="Darwin Armistead">
                        </picture>
                        <figcaption>Nightingale Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Darwin_Armistead_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Darwin_Armistead_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Darwin_Armistead_Desktop.jpg" alt="Darwin Armistead">
                        </picture>
                        <figcaption>Edison Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Living_Armistead_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Living_Armistead_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Living_Armistead_Desktop.jpg" alt="Living Armistead">
                        </picture>
                        <figcaption>Living</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Armistead House" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12699.538289473945!2d-76.72479829378129!3d37.27416416777889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b089cd013e91b3%3A0x63e4a0a31a58c3f1!2sArmistead%20House!5e0!3m2!1sen!2sus!4v1740292560553!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Armistead House: A Historic Restoration Transformed into a Hotel</h2>
                <p>
                    Once a historic residence, Armistead House is now a charming hotel offering guests a perfect stay near Colonial Williamsburg’s top attractions
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/EP7cmttusBs" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="Richard" class="attraction-detail odd">
            <h2>Richard Crump House</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Tavren_House_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Tavren_House_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Tavren_House_Desktop.jpg" alt="Richard Crump House">
                </picture>
                <div class="text-content">
                    
                    <p>Experience the historic charm of Richard Crump House, a beautifully preserved colonial-era home offering a glimpse into Williamsburg’s rich architectural heritage.</p>
                    <p><strong>Historic House</strong></p>
                    <p><strong>Address:</strong> 210 Francis St E, Williamsburg, VA 23185</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            

             <!-- Amenities Icons  -->
            <div class="amenities-icons">
                <h2 class="amenities-header">Amenities</h2>
                <div class="icons-row">
                    <div class="amenity">
                        <img src="assets/images/restuarant.png" alt="In House Restaurant">
                        <p>In House Restaurant</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/spa.png" alt="Full Service Spa">
                        <p>Full Service Spa</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/golf-player.png" alt="Golf">
                        <p>Golf</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/weight.png" alt="Fitness Center">
                        <p>Fitness Center</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/swimming.png" alt="Pool">
                        <p>Pool</p>
                    </div>
                    <div class="amenity">
                        <img src="assets/images/wedding-rings.png" alt="Wedding & Celebrations">
                        <p>Wedding & Celebrations</p>
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Explore the interior</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Fireplace_Richard_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Fireplace_Richard_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Fireplace_Richard_Desktop.jpg" alt="Fireplace Richard">
                        </picture>
                        <figcaption>Fireplace</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Queen_Bed_Richard_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Queen_Bed_Richard_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Queen_Bed_Richard_Desktop.jpg" alt="Queen Bed Richard">
                        </picture>
                        <figcaption>Queen Bed</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bathroom_Richard_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bathroom_Richard_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bathroom_Richard_Desktop.jpg" alt="Bathroom Richard">
                        </picture>
                        <figcaption>Bathroom</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Twin_Bed_Richard_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Twin_Bed_Richard_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Twin_Bed_Richard_Desktop.jpg" alt="Twin Bed Richard">
                        </picture>
                        <figcaption>Two Twin Bed</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Living_Richard_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Living_Richard_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Living_Richard_Desktop.jpg" alt="Living Richard">
                        </picture>
                        <figcaption>Living</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Drink_Water_Richard_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Drink_Water_Richard_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Drink_Water_Richard_Desktop.jpg" alt="Drink Water Richard">
                        </picture>
                        <figcaption>Drink Water</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Richard Crump House"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1587.5139410267864!2d-76.69797140260916!3d37.27076592148182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08906326920c7%3A0x10fc67c3dfb78041!2s210%20Francis%20St%20E%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740295231793!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Richard Crump House: A Beautifully Restored Colonial Williamsburg Home</h2>
                <p>
                    Explore the historic Richard Crump House, a beautifully restored colonial-era residence showcasing Williamsburg’s architectural heritage and timeless charm.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/wwomVZ67ZsM" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <section id="booking-form" class="booking-section">
                <!-- Left Column: Centered Heading -->
                <div class="booking-header">
                  <h2>Book Your Stay</h2>
                </div>
              
                <!-- Right Column: Booking Form -->
                <div class="booking-form">
                  <form action="confirmation_hotel.php" method="post">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" placeholder="Enter your full name" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required>

              
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="yourname@example.com" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
              
                    <label for="accommodation">Select Accommodation:</label>
                    <select id="accommodation" name="accommodation" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="The Cedars of Williamsburg Bed & Breakfast Inn">The Cedars of Williamsburg Bed & Breakfast Inn</option>
                        <option value="Ewing House">Ewing House</option>
                        <option value="Armistead House">Armistead House</option>
                        <option value="Richard Crump House">Richard Crump House</option>
                    </select>
              
                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required>
              
                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required>
              
                    <label for="preferences">Special Requests:</label>
                    <textarea id="preferences" name="preferences" rows="4" placeholder="Let us know about any special requirements..."></textarea>
              
                    <input type="submit" value="Book Now">
                  </form>
                </div>
            </section>

            <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>


    <?php require_once('assets/inc/footer.inc.php'); ?>
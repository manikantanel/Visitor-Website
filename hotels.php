<?php
    $pageTitle = "Hotel"; 
    require_once('assets/inc/header.inc.php');
?>


    
<!-- Hero Section with Full-Screen Video -->
    <section class="hero-section">
        <div class="hero-overlay">
            <h1>Your Luxury Hotel Escape</h1>
            <p>Sleep, dine, relax, and rejuvenate.</p>
        </div>
        <img src="assets/images/Hotel_Hero_Section_1.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="accommodations.php">Accommodation</a> &gt;
        <span>Hotels</span>
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
            <h1>Top Hotels in Williamsburg</h1>
            <p><i>Find comfortable and convenient hotels offering premium services, ideal for both families and business travelers.</i></p>
        </section>

        <article id="SocialTerrace" class="attraction-detail odd">
            <h2>Williamsburg Inn</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Social_Terrace_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Social_Terrace_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Social_Terrace_Desktop.jpg" alt="Social Terrace">
                </picture>
                <div class="text-content">
                    
                    <p>Williamsburg Inn blends historic charm with modern luxury, offering elegant rooms, fine dining, lush gardens, and an immersive colonial history experience.</p>
                    <p><strong><i>Ionic Luxury</i></strong></p>
                    <p><strong>Address:</strong> 136 Francis Street East, Williamsburg, VA, United States</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons -->
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
                            <source srcset="assets/images/1_King_Bed_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/1_King_Bed_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/1_King_Bed_Desktop.jpg" alt="One King Bed Terrace">
                        </picture>
                        <figcaption>One King Bed</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/1_King_Bed_Junior_Suite_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/1_King_Bed_Junior_Suite_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/1_King_Bed_Junior_Suite_Desktop.jpg" alt="One King Bed Junior Suite">
                        </picture>
                        <figcaption>King Bed with Junior Suite</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/1_King_Bed_Superior_Room_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/1_King_Bed_Superior_Room_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/1_King_Bed_Superior_Room_Desktop.jpg" alt="One King Bed Superior Room">
                        </picture>
                        <figcaption>King Bed with Superior Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/2_Queen_Beds_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/2_Queen_Beds_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/2_Queen_Beds_Desktop.jpg" alt="Queen Beds">
                        </picture>
                        <figcaption>Queen Bed</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/bathroom_Sink_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/bathroom_Sink_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/bathroom_Sink_Desktop.jpg" alt="Bathroom Sink">
                        </picture>
                        <figcaption>Bathroom Sink</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Lobby_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Lobby_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Lobby_Desktop.jpg" alt="Lobby">
                        </picture>
                        <figcaption>Lobby</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Williamsburg Inn" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.1063608650375!2d-76.70001888803463!3d37.26890487200091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b089064c0a7c5f%3A0xe052b8fcaea07781!2sWilliamsburg%20Inn%2C%20an%20official%20Colonial%20Williamsburg%20Hotel!5e0!3m2!1sen!2sus!4v1740216881406!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Discover the Historic Elegance of Williamsburg Inn</h2>
                <p>
                    Experience the elegance of Williamsburg Inn, a historic five-star hotel hosting esteemed guests like Churchill and Queen Elizabeth II since 1937.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/Y08KrmlR2vA" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="Lodge" class="attraction-detail odd">
            <h2>Williamsburg Lodge</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Williamsburg_Lodge_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Williamsburg_Lodge_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Williamsburg_Lodge_Desktop.jpg" alt="Williamsburg Lodge">
                </picture>
                <div class="text-content">
                    
                    <p>Experience Colonial Williamsburg’s charm at Williamsburg Lodge, blending 18th-century elegance with modern comforts like Wi-Fi, mini-refrigerators, and premium entertainment.</p>
                    <p><strong>Autograpgh Collection</strong></p>
                    <p><strong>Address:</strong> 310 South England Street, Williamsburg, VA, United States</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons -->
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
                            <source srcset="assets/images/Standard_Room_1_Queen_Room_Lodge_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Standard_Room_1_Queen_Room_Lodge_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Standard_Room_1_Queen_Room_Lodge_Desktop.jpg" alt="Standard Room 1 Queen Room Lodge">
                        </picture>
                        <figcaption>One queen Standard Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/King_Room_Deluxe_Lodge_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/King_Room_Deluxe_Lodge_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/King_Room_Deluxe_Lodge_Desktop.jpg" alt="King Room Deluxe Lodge">
                        </picture>
                        <figcaption>One King standard room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/2_Queen_Room_Deluxe_Room_Lodge_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/2_Queen_Room_Deluxe_Room_Lodge_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/2_Queen_Room_Deluxe_Room_Lodge_Desktop.jpg" alt="2 Queen Room Deluxe Room Lodge">
                        </picture>
                        <figcaption>Two queen Deluxe Room </figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/2_Queen_Room_Premium_Lodge_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/2_Queen_Room_Premium_Lodge_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/2_Queen_Room_Premium_Lodge_Desktop.jpg" alt="2 Queen Room Premium Lodge">
                        </picture>
                        <figcaption>Two queen Premium Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/1_King_Room_Premium_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/1_King_Room_Premium_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/1_King_Room_Premium_Desktop.jpg" alt="1 King Room Premium">
                        </picture>
                        <figcaption>One King Premium Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Junior_Suite_Lodge_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Junior_Suite_Lodge_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Junior_Suite_Lodge_Desktop.jpg" alt="Junior Suite Lodge">
                        </picture>
                        <figcaption>Junior Suite</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Williamsburg Lodge" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.144223311399!2d-76.70330602495544!3d37.26800697211751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0890822ddf0fd%3A0x11378be85397debc!2s310%20S%20England%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740275427501!5m2!1sen!2sus"
                    width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Williamsburg Lodge, A Cozy Stay Near Colonial Williamsburg</h2>
                <p>
                    Just steps from Colonial Williamsburg, Williamsburg Lodge offers clean, comfortable, and affordable accommodations, blending history with modern convenience for a relaxing stay.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/YDv4yB3ys30"
                    title="YouTube video player" 
                   
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="WilliamburgHotel" class="attraction-detail odd">
            <h2>Williamsburg Woodlands Hotel and Suites</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Williamburg_Hotel_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Williamburg_Hotel_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Williamburg_Hotel_Desktop.jpg" alt="Williamburg Hotel">
                </picture>
                <div class="text-content">
                    
                    <p>Williamsburg Woodlands Hotel offers family-friendly comfort, a prime location, exclusive Colonial Williamsburg access, and a delightful continental breakfast for unforgettable stays.</p>
                    <p><strong>Comfort and convenience </strong></p>
                    <p><strong>Address:</strong> 105 Visitor Center Drive, Williamsburg, VA, United States</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons Row (above the gallery section) -->
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
                            <source srcset="assets/images/Premium_Room_Hotel_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Premium_Room_Hotel_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Premium_Room_Hotel_Desktop.jpg" alt="Premium Room Hotel">
                        </picture>
                        <figcaption>Premium Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Desk_TV_Hotel_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Desk_TV_Hotel_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Desk_TV_Hotel_Desktop.jpg" alt="Desk TV">
                        </picture>
                        <figcaption>Desk TV</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Mini-Fridge_Hotel_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Mini-Fridge_Hotel_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Mini-Fridge_Hotel_Desktop.jpg" alt="Mini Fridge">
                        </picture>
                        <figcaption>Mini Fridge </figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Lobby_Hotel_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Lobby_Hotel_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Lobby_Hotel_Desktop.jpg" alt="Lobby Hotel">
                        </picture>
                        <figcaption>Lobby</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Laundry_Room_Hotel_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Laundry_Room_Hotel_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Laundry_Room_Hotel_Desktop.jpg" alt="Laundry Room Hotel">
                        </picture>
                        <figcaption>Laundry Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Children_play_area_Hotel_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Children_play_area_Hotel_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Children_play_area_Hotel_Desktop.jpg" alt="Children play area Hotel">
                        </picture>
                        <figcaption>Children play's area</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Williamsburg Woodlands Hotel and Suites" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12698.449800378288!2d-76.71735399374728!3d37.28061616768972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0891aed025409%3A0xf1b83a82d2cf7aca!2sWilliamsburg%20Woodlands%20Hotel%20%26%20Suites%2C%20an%20official%20Colonial%20Williamsburg%20Hotel!5e0!3m2!1sen!2sus!4v1740278350082!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Williamsburg Woodlands Hotel: Comfort, Convenience & Family Fun</h2>
                <p>
                    Enjoy a perfect family getaway at Williamsburg Woodlands Hotel with complimentary tickets, breakfast, a heated pool, mini-golf, and a splash park.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/GBsR2pyLejA" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div> 

        <article id="Griffin" class="attraction-detail odd">
            <h2>Griffin Hotel</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Griffin_Hotel_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Griffin_Hotel_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Griffin_Hotel_Desktop.jpg" alt="Griffin Hotel">
                </picture>
                <div class="text-content">
                   
                    <p>Experience serene beauty at Griffin Hotel, featuring balcony views, tranquil ponds, and complimentary Colonial Williamsburg admission for a relaxing historic getaway.</p>
                    <p><strong>Serene Retreat </strong></p>
                    <p><strong>Address:</strong> 136 Francis Street East, Williamsburg, Virginia 23185, USA</p>
                    <p><strong>Check-in:</strong> 4 PM</p>
                    <p><strong>Check-out:</strong> 11 AM</p>
                    <a href="#booking-form" class="ticket-button">Book Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>

             <!-- Amenities Icons Row (above the gallery section) -->
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
                            <source srcset="assets/images/Premium_Room_Griffin_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Premium_Room_Griffin_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Premium_Room_Griffin_Desktop.jpg" alt="Premium Room Griffin">
                        </picture>
                        <figcaption>Premium Room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Premium_Room_Desk_Grffin_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Premium_Room_Desk_Grffin_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Premium_Room_Desk_Grffin_Desktop.jpg" alt="Premium Room Desk Grffin">
                        </picture>
                        <figcaption>Premium room with Desk</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bathrrom_Griifin_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bathrrom_Griifin_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bathrrom_Griifin_Desktop.jpg" alt="Bathroom Griffin">
                        </picture>
                        <figcaption>Bathroom </figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Two_Queen_bed_Griffin_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Two_Queen_bed_Griffin_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Two_Queen_bed_Griffin_Desktop.jpg" alt="Two Queen bed Griffin">
                        </picture>
                        <figcaption>Two queen bed</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Tennis_Griifin_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Tennis_Griifin_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Tennis_Griifin_Desktop.jpg" alt="Tennis Griifin">
                        </picture>
                        <figcaption>Tennis</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Television_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Television_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Television_Desktop.jpg" alt="Television">
                        </picture>
                        <figcaption>Television</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Griffin Hotel" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.1063608601316!2d-76.70001352495535!3d37.26890487211724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08907a493a39b%3A0x3185ecf3c6a42c13!2s136%20Francis%20St%20E%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740287051995!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>The Griffin Hotel: A Serene Escape in Colonial Williamsburg</h2>
                <p>
                    Enjoy balcony views, wooded landscapes, free WiFi, spa amenities, and bike rentals at The Griffin Hotel for a relaxing retreat.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/R6iGzthqTdM"  
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
                        <option value="Williamsburg Inn">Williamsburg Inn</option>
                        <option value="Williamsburg Lodge">Williamsburg Lodge</option>
                        <option value="Williamsburg Woodlands Hotel and Suites">Williamsburg Woodlands Hotel and Suites</option>
                        <option value="Griffin Hotel">Griffin Hotel</option>
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

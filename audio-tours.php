<?php
$pageTitle = "Audio Tours"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Audio Tour</h1>
            <p>Immerse in history and sound.</p>
        </div>
        <img src="assets/images/Yorktown_Battlefield_1_159a03f1-51bb-4bab-90c2-4cd4fa7852ae.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="guided-tours.php">Guided Tour</a> &gt;
        <span>Audio Tours</span>
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
            <h1>Self-Guided Audio Tours</h1>
            <p><i>Explore Williamsburg at your own pace with our self-guided audio tours. These tours provide detailed historical insights while giving you the flexibility to stop and explore as you like.</i></p>
        </section>

        <article id="SelfGuided" class="attraction-detail odd">
            <h2>Colonial Williamsburg</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/capitol_colonial_tablet.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/capitol_colonial_mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/capitol_colonial_desktop.jpg" alt="Colonial Capitol">
                </picture>
                <div class="text-content">
                    
                    <p>This audio tour covers the must-see landmarks of Colonial Williamsburg with engaging storytelling and historical context.</p>
                    <p><strong>Duration:</strong> 1 hour</p>
                    <p><strong>Audio guide:</strong> English and Spanish</p>
                    <p>Pick up and drop off at Colonial Williamsburg Visitor Center, 101 Visitor Center Dr, Williamsburg, VA 23185</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                </div>
            </div>
            <div class="Page-start-list">
                <h2>Included Features</h2>
                <ul>
                    <li><strong>Captivating Narratives</strong> that reveal distinctive stories, historical insights, and intriguing facts for an unforgettable adventure.</li>
                    <li><strong>Exceptional Narration</strong> with a superb voice talent celebrated for its charm and widespread acclaim.</li>
                    <li><strong>Extended Insights</strong> so you can delve deeper into your favorite tales with supplementary background stories.</li>
                    <li><strong>Detailed Itinerary</strong> to explore every highlight along the route, ensuring no key site is overlooked.</li>
                    <li><strong>Offline Navigation</strong> using maps that work seamlessly without cellular or Wi-Fi connectivity.</li>
                    <li><strong>Automatic Playback</strong> where audio stories trigger based on your location, completely hands free.</li>
                    <li><strong>Flexible Timing</strong> to begin, pause, and resume your tour at your leisure for a personalized journey.</li>
                    <li><strong>User-Friendly App</strong> to download Action’s Tour Guide App and enhance your exploration experience.</li>
                    <li><strong>Accessible Captions</strong> to display synchronized text for the deaf community along with the audio tour.</li>
                </ul>
            </div>

            <section class="gallery-container">
                <h2>Places to Visit</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Peyton_Randolph_House_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Peyton_Randolph_House_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Peyton_Randolph_House_Desktop.jpg" alt="Peyton Randolph House">
                        </picture>
                        <figcaption> Peyton Randolph House</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bassett_Hall_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bassett_Hall_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bassett_Hall_Desktop.jpg" alt="Bassett Hall">
                        </picture>
                        <figcaption>Bassett Hall</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Capitol_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Capitol_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Capitol_desktop.jpg" alt="Capitol Building">
                        </picture>
                        <figcaption>Colonial Williamsburg Capitol Building</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/secretarys_office_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/secretarys_office_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/secretarys_office_Desktop.jpg" alt="Secretary's Office">
                        </picture>
                        <figcaption>Secretary's Office</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Tavren_House_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Tavren_House_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Tavren_House_Desktop.jpg" alt="Raleigh Tavern">
                        </picture>
                        <figcaption>Raleigh Tavern</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Powder_magazine_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Powder_magazine_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Powder_magazine_desktop.jpg" alt="Colonial Williamsburg Magazine">
                        </picture>
                        <figcaption>Colonial Williamsburg Magazine</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Colonial Williamsburg Audio Tour" 
                src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d12699.73653308812!2d-76.71980239503935!3d37.27298897948851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e2!4m5!1s0x89b0891a9c4bc4dd%3A0x45a26493c09453dc!2sColonial%20Williamsburg%20Visitor%20Center%2C%20101%20Visitor%20Ctr%20Dr%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2792871!2d-76.6985883!4m5!1s0x89b089064c0a7c5f%3A0x631d53755a33edd6!2sPeyton%20Randolph%20House%2C%20100%20W%20Nicholson%20St%2C%20Williamsburg%2C%20VA!3m2!1d37.272381599999996!2d-76.6999301!4m5!1s0x89b089011fc2fb75%3A0x87feb17d69a63270!2s522%20Francis%20Street%20East%2C%20Williamsburg%2C%20VA!3m2!1d37.269244799999996!2d-76.69175039999999!4m5!1s0x89b08906acd49aa5%3A0x3c55efcb40b8a867!2s500%20East%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.2716103!2d-76.6933028!4m5!1s0x89b089066429af39%3A0x910e8865e5be97d6!2sE%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.271343699999996!2d-76.6977647!4m5!1s0x89b0890685cc771d%3A0x7c6ea7d658fbfb6a!2s413%20East%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.2717253!2d-76.695702!4m5!1s0x89b089088e3edab1%3A0x65923888c22c6083!2s103%20East%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.270727699999995!2d-76.69999!5e0!3m2!1sen!2sus!4v1740209517616!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <article id="JamestownAudio" class="attraction-detail odd">
            <h2>Jamestown Settlement</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Jamestown_Museums_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Jamestown_Museums_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Jamestown_Museums_Desktop.jpg" alt="Jamestown settlment">
                </picture>
                <div class="text-content">
                    
                    <p>This audio tour covers the must-see landmarks of Colonial Williamsburg with engaging storytelling and historical context.</p>
                    <p><strong>Duration:</strong> 1 hour</p>
                    <p><strong>Audio guide:</strong> English and Spanish</p>
                    <p>Pick up and drop off at 1368 Colonial Nat'l Historical Pkwy, Jamestown, VA 23081</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                </div>
            </div>
            <div class="Page-start-list">
                <h2>Included Features</h2>
                <ul>
                    <li><strong>Captivating Narratives</strong> that reveal distinctive stories, historical insights, and intriguing facts for an unforgettable adventure.</li>
                    <li><strong>Exceptional Narration</strong> with a superb voice talent celebrated for its charm and widespread acclaim.</li>
                    <li><strong>Extended Insights</strong> so you can delve deeper into your favorite tales with supplementary background stories.</li>
                    <li><strong>Detailed Itinerary</strong> to explore every highlight along the route, ensuring no key site is overlooked.</li>
                    <li><strong>Offline Navigation</strong> using maps that work seamlessly without cellular or Wi-Fi connectivity.</li>
                    <li><strong>Automatic Playback</strong> where audio stories trigger based on your location, completely hands free.</li>
                    <li><strong>Flexible Timing</strong> to begin, pause, and resume your tour at your leisure for a personalized journey.</li>
                    <li><strong>User-Friendly App</strong> to download Action’s Tour Guide App and enhance your exploration experience.</li>
                    <li><strong>Accessible Captions</strong> to display synchronized text for the deaf community along with the audio tour.</li>
                </ul>
            </div>

            <section class="gallery-container">
                <h2>Places to Visit</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Historic_Jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Historic_Jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Historic_Jamestown_Desktop.jpg" alt="Historic Jamestown">
                        </picture>
                        <figcaption> Historic Jamestown</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Jamestown_Museums_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Jamestown_Museums_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Jamestown_Museums_Desktop.jpg" alt="Jamestown settlment">
                        </picture>
                        <figcaption>Jamestown Settlement Museum</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Glasshouse_Jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Glasshouse_Jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Glasshouse_Jamestown_Desktop.jpg" alt="Glasshouse Exhibit">
                        </picture>
                        <figcaption>Glasshouse Exhibit</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Fort_Jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Fort_Jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Fort_Jamestown_Desktop.jpg" alt="Fort Reconstruction">
                        </picture>
                        <figcaption>Fort Reconstruction</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Archaelogy_Jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Archaelogy_Jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Archaelogy_Jamestown_Desktop.jpg" alt="Archaeology Center">
                        </picture>
                        <figcaption>Archaeology Center</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Living_History_jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Living_History_jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Living_History_jamestown_Desktop.jpg" alt="Living History Village">
                        </picture>
                        <figcaption>Living History Village</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Jamestown Settlement Audio Tour"  
                src="https://www.google.com/maps/embed?pb=!1m64!1m12!1m3!1d25402.670082977846!2d-76.72952271970935!3d37.263508751446984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m49!3e0!4m5!1s0x89b089088e3edab1%3A0x65923888c22c6083!2s103%20East%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.270727699999995!2d-76.69999!4m5!1s0x89b0899fe2752beb%3A0x89110a241155dcaa!2s320%20Jamestown%20Rd%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2689302!2d-76.7113358!4m5!1s0x89b0899e455d888d%3A0x193343ed6fe34d36!2s600%20Jamestown%20Road%2C%20Williamsburg%2C%20VA!3m2!1d37.267219399999995!2d-76.7141937!4m5!1s0x89b06033de041a2f%3A0x43d079f6d2f6ce9f!2s1348%20Colonial%20National%20Historical%20Parkway%2C%20Williamsburg%2C%20VA!3m2!1d37.2207005!2d-76.7853051!4m5!1s0x89b061b508a28b13%3A0x697d2f9ae3b050e2!2s1368%20Colonial%20National%20Historical%20Parkway%2C%20Williamsburg%2C%20VA!3m2!1d37.2112477!2d-76.77729149999999!4m5!1s0x89b060320a46cf95%3A0x9baff86b7ec4e788!2sJamestown%20Settlement%20Museum%20Building%2C%202110%20Jamestown%20Rd%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.224776999999996!2d-76.7838764!4m5!1s0x89b060320a46cf95%3A0x9baff86b7ec4e788!2sJamestown%20Settlement%20Museum%20Building%2C%202110%20Jamestown%20Rd%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.224776999999996!2d-76.7838764!4m5!1s0x89b0899e455d888d%3A0x193343ed6fe34d36!2s600%20Jamestown%20Road!3m2!1d37.267219399999995!2d-76.7141937!5e0!3m2!1sen!2sus!4v1740210932787!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>


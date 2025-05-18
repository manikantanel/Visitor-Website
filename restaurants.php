<?php
$pageTitle = "Restaurants"; 
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
        <a href="index.php">Home</a> &gt; <a href="accommodations.php">Accommodation</a> &gt;
        <span>Restaurants</span>
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
            <h1>Restaurants Offering Lodging</h1>
            <p><i>Enjoy authentic colonial meals and stay the night in one of Williamsburg’s cozy restaurant lodges.</i></p>
        </section>

        <article id="Christiana" class="attraction-detail odd">
            <h2>Christiana Campbell’s Tavern</h2>
            <div class="attraction-content-detail">
                <div class ="restaurants-background">
                    <img src="assets/images/Christiana-Campbells-Tavern-200x237.webp" alt="Christiana Campbells">
                </div>
                <div class="text-content">
                    <p>Dine at Christiana Campbell’s Tavern, where George Washington enjoyed seafood, featuring historic recipes, fresh shrimp, scallops, fish, crab cakes, and spoon bread.</p>
                    <p><strong>George Washington’s favorite for good reason.</strong></p>
                    <p><strong>Address:</strong> 101 South Waller Street Williamsburg VA</p>
                    <p><strong>Ours Hours</strong> Dinner | Tuesday - Saturday 4:00pm - 8:00pm</p>
                    <a href="assets/pdf/Tavern_Menu.pdf" class="ticket-button"  target="_blank" 
                    rel="noopener noreferrer">View Menu</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Campbell_1_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Campbell_1_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Campbell_1_Desktop.jpg" alt="Campbell 1">
                        </picture>
                        
                        <figcaption>Lobster Egg Bites </figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Campbell_2_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Campbell_2_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Campbell_2_Desktop.jpg" alt="Campbell 2">
                        </picture>
                        
                        <figcaption>Garlic Bread</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Campbell_3_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Campbell_3_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Campbell_3_Desktop.jpg" alt="Campbell 3">
                        </picture>
                        
                        <figcaption>Shell Salad</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Christiana Campbell’s Tavern"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.9894415469125!2d-76.69394882495529!3d37.27167747211639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b089016237cfbd%3A0xdb09f47664a40351!2s101%20S%20Waller%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740297025732!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <article id="kingsArms" class="attraction-detail odd">
            <h2>King’s Arms Tavern</h2>
            <div class="attraction-content-detail">
                <div class ="restaurants-background">
                    <img src="assets/images/KAT_Logo-200x135.webp" alt="King arms logo">
                </div>
                <div class="text-content">
                    <p>Dine at Christiana Campbell’s Tavern, where George Washington enjoyed seafood, featuring historic recipes, fresh shrimp, scallops, fish, crab cakes, and spoon bread.</p>
                    <p><strong>A refined chophouse experience</strong></p>
                    <p><strong>Address:</strong> 416 East Duke of Gloucester Street Williamsburg VA</p>
                    <p><strong>Ours Hours</strong> Lunch: Daily 11:00am - 2:00pm</p>
                    <a href="assets/pdf/King_Menu.pdf" class="ticket-button"  target="_blank" 
                    rel="noopener noreferrer">View Menu</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                        <figure>
                            <picture>
                                <source srcset="assets/images/KAT_1_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/KAT_1_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/KAT_1_Desktop.jpg" alt="KAT 1">
                            </picture>
                           
                            <figcaption>Pork Butter Bread </figcaption>
                        </figure>
                        <figure>
                            <picture>
                                <source srcset="assets/images/KAT_2_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/KAT_2_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/KAT_2_Desktop.jpg" alt="KAT 2">
                            </picture>
                           
                            <figcaption>Beef Bean</figcaption>
                        </figure>
                        <figure>
                            <picture>
                                <source srcset="assets/images/KAT_3_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/KAT_3_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/KAT_3_Desktop.jpg" alt="KAT 3">
                            </picture>
                           
                            <figcaption>Apple Pie</figcaption>
                        </figure>
                    </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of King’s Arms Tavern"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.00705624647!2d-76.69802792495524!3d37.27125977211648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b089068de2ba79%3A0xe9c59432a84b81eb!2s416%20E%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740297644252!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <article id="Rockefeller" class="attraction-detail odd">
            <h2>Rockefeller </h2>
            <div class="attraction-content-detail">
                <div class ="restaurants-background">
                    <img src="assets/images/rockefeller-room-logo-200x158.webp" alt="Rockefeller">
                </div>
                <div class="text-content">
                    
                    <p>The Rockefeller Room closes January-March, reopening in late Spring to offer exceptional dining experiences with refined cuisine and elegant ambiance.</p>
                    <p><strong>Experience the Pinnacle of Dining Excellence.</strong></p>
                    <p><strong>Address:</strong> 136 Francis Street East Williamsburg VA 23185</p>
                    <p><strong>Ours Hours</strong> Closed for the season</p>
                    <a href= "assets/pdf/Rock_Menu.pdf" class="ticket-button"  target="_blank" 
                    rel="noopener noreferrer">View Menu</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                                <source srcset="assets/images/Rock_1_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/Rock_1_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/Rock_1_Desktop.jpg" alt="Rock 1">
                        </picture>
                       
                        <figcaption>Salty Shell</figcaption>
                    </figure>
                    <figure>
                        <picture>
                                <source srcset="assets/images/Rock_2_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/Rock_2_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/Rock_2_Desktop.jpg" alt="Rock 2">
                        </picture>
                        
                        <figcaption>Beef Wine</figcaption>
                    </figure>
                    <figure>
                        <picture>
                                <source srcset="assets/images/Rock_3_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/Rock_3_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/Rock_3_Desktop.jpg" alt="Rock 3">
                        </picture>
                       
                        <figcaption>Traditional Coffee</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Rockefeller"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.1063608601316!2d-76.70001352495535!3d37.26890487211724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08907a493a39b%3A0x3185ecf3c6a42c13!2s136%20Francis%20St%20E%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740298012922!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <article id="ShieldsTavern" class="attraction-detail odd">
            <h2>Shields Tavern</h2>
            <div class="attraction-content-detail">
                <div class ="restaurants-background">
                    <img src="assets/images/shields-transp-200x222.webp" alt="Shields Tavern">
                </div>
                <div class="text-content">
                    
                    <p>Shields Tavern, a historic 18th-century gathering place, offered food, drink, lodgings, and entertainment, serving Williamsburg’s travelers, locals, and upper-middling society.</p>
                    <p><strong>Welcome Back to Shields Tavern</strong></p>
                    <p><strong>Address:</strong> 422 East Duke of Gloucester Street Williamsburg VA 23185</p>
                    <p><strong>Ours Hours</strong> Closed for the season</p>
                    <a href= "assets/pdf/Shields_Menu.pdf" class="ticket-button"  target="_blank" 
                    rel="noopener noreferrer">View Menu</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                                <source srcset="assets/images/Shields_1_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/Shields_1_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/Shields_1_Desktop.jpg" alt="Shields 1">
                        </picture>
                        
                        <figcaption>Outdoor</figcaption>
                    </figure>
                    <figure>
                        <picture>
                                <source srcset="assets/images/Shields_2_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/Shields_2_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/Shields_2_Desktop.jpg" alt="Shields 2">
                        </picture>
                       
                        <figcaption>Event Night</figcaption>
                    </figure>
                    <figure>
                        <picture>
                                <source srcset="assets/images/Shields_3_Desktop.jpg" media="(min-width: 800px)">
                                <source srcset="assets/images/Shields_3_Mobile.jpg" media="(max-width: 799px)">
                                <img src="assets/images/Shields_3_Desktop.jpg" alt="Shields 3">
                        </picture>
                       
                        <figcaption>Diining Table</figcaption>
                    </figure>
                </div>
            </section>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Shields Tavern"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.0042434723896!2d-76.69743682495522!3d37.27132647211657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08906964324bd%3A0xf3f6e99462e5c2ff!2s422%20E%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740298475073!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>

    <?php require_once('assets/inc/footer.inc.php'); ?>



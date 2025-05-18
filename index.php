<?php
$pageTitle = "Home"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Image Header Slider --> 
<div class="image-slider">
        <button class="arrow left-arrow">&#9664;</button>
        <div class="slides-wrapper">
            <div class="slides">
                <article class="slide">
                    <img src="assets/images/capitol_colonial_desktop.jpg" alt="Capitol">
                    <div class="slide-content">
                        <h2>Historic</h2>
                        <p><i>We're making our nation's history more accessible for everyone.</i></p>
                        <a href="./ticket.php" class="btn">Get Tickets</a>
                    </div>
                </article>
                <article class="slide">
                    <img src="assets/images/Jamestown_Museums_Desktop.jpg" alt="Discover Jamestown's Legacy">
                    <div class="slide-content">
                        <h2>Discover Jamestown's Legacy</h2>
                        <p><i>Step into the story of America's first permanent English colony.</i></p>
                        <a href="./museums.php#JamestownMuseums" class="btn">Explore</a>
                    </div>
                </article>
                <article class="slide">
                    <img src="assets/images/YR_Views_of_York_River_State_Park_Wooden_Seat_Desktop.jpg" alt="Nature Awaits You">
                    <div class="slide-content">
                        <h2>Nature Awaits You</h2>
                        <p><i>Visit York River State Park for hiking, kayaking, and birdwatching.</i></p>
                        <a href="./parks-nature.php#YorkRiver" class="btn">Visit Park</a>
                    </div>
                </article>
            </div>
        </div>
        <button class="arrow right-arrow">&#9654;</button>
    </div>
    

    <main>
            <!-- Welcome Section -->
            <section class="welcome-attraction-section">
                <h1>Welcome to Williamsburg Port, Colonial Virginia</h1>
                <p><i>"Experience the history and charm of Williamsburg, with a wide range of attractions, events, and guided tours waiting to be explored."</i></p>
            </section>

            <!-- Countdown timer-->
            <?php
                $isLoggedIn = isset($_SESSION['user_id']);
                ?>

                <div id="deal-timer" class="deal-countdown">
                    <img src="assets/images/special_offer_countdown_timer.png" alt="Special Offer" class="deal-icon">
                    
                    Hurry! This special deal ends in <span id="countdown"></span>

                    <br>

                    <?php
                    $redirectLink = $isLoggedIn ? "special-deals.php" : "login.php?redirect=special-deals.php";
                    ?>

                    <a id="offer-btn" href="<?php echo $redirectLink; ?>" class="ticket-button" style="display: none; margin-top: 10px;">
                        <?php echo $isLoggedIn ? "View Current Offers" : "Login to View Deals"; ?>
                    </a>

                </div>
                

           <!-- Featured Attractions Section -->
        <section class="featured-attractions">
            <h2>New Discoveries Every Day</h2>
            <div class="image-card-slider">
                <button id="attractions-left-arrow" class="arrow">&#9664;</button>
                <div class="slider-wrapper">
                    <div class="slider">
                        <article class="card">
                            <a href="./historic-sites.php#Governor" class="card-link">
                                <img src="assets/images/Governor_Palace_Desktop.jpg" alt="Governor’s Palace">
                                <div class="card-overlay"></div>
                                <div class="card-text">
                                    <h3>Governor’s Palace</h3>
                                </div>
                            </a>
                        </article>
                        <article class="card">
                            <a href="./museums.php#AbbyMuseum" class="card-link">
                                <img src="assets/images/Abby_aldrich_rockefeller_folk_art_museum_Desktop.jpg" alt="Abby Muesum">
                                <div class="card-overlay"></div>
                                <div class="card-text">
                                    <h3>Explore the oldest Toy</h3>
                                </div>
                            </a>
                        </article>
                        <article class="card">
                            <a href="./walking-tours.php#WalkingTour" class="card-link">
                                <img src="assets/images/Walking_tour_colonial_Desktop.jpg" alt="Walking tour">
                                <div class="card-overlay"></div>
                                <div class="card-text">
                                    <h3>Walking tour</h3>
                                </div>
                            </a>
                        </article>
                        <article class="card">
                            <a href="./current-events.php#GeorgeWashington" class="card-link">
                                <img src="assets/images/george_washington_Desktop.jpg" alt="George Washington">
                                <div class="card-overlay"></div>
                                <div class="card-text">
                                    <h3>George Washington</h3>
                                </div>
                            </a>
                        </article>
                        <article class="card">
                            <a href="./annual-festivals.php#GrandIllum" class="card-link">
                                <img src="assets/images/Colonial_Williamsburg_GrandIllumination_Desktop.jpg" alt="Grand Illumination">
                                <div class="card-overlay"></div>
                                <div class="card-text">
                                    <h3>Grand Illumination</h3>
                                </div>
                            </a>
                        </article>
                        <article class="card">
                            <a href="./walking-tours.php#Haunted" class="card-link">
                                <img src="assets/images/haunted_williamsburg_Desktop.jpg" alt="Haunted">
                                <div class="card-overlay"></div>
                                <div class="card-text">
                                    <h3>Ghosts of Williamsburg</h3>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
                <button id="attractions-right-arrow" class="arrow">&#9654;</button>
            </div>
        </section>

                
                <!-- Latest Events Section -->
                <section class="history-section">
                    <h2>Latest Events</h2>
                    <div class="history-container">
                        <article class="history-item large">
                            <h3 class="overlay">An Evening of Historic Elegance</h3>
                            <a href="./current-events.php#PalaceConcert" class="history-link">
                                <img src="assets/images/Current_Events_Hero_section_Desktop.jpg" alt="Historic Sites">
                            </a>
                        </article>
                        <div class="history-grid">
                            <article class="history-item">
                                <h3 class="overlay">Cry Witch</h3>
                                <a href="./current-events.php#CryWitch" class="history-link">
                                    <img src="assets/images/cry_witch_Desktop.jpg" alt="Cry Witch">
                                </a>
                            </article>
                            <article class="history-item">
                                <h3 class="overlay">To Hang a Pirate</h3>
                                <a href="./current-events.php#Pirate" class="history-link">
                                    <img src="assets/images/Pirate_Desktop.jpg" alt="Pirates">
                                </a>
                            </article>
                        </div>
                    </div>
                </section>


                <!-- Second Section: Large Image Right, Grid Left -->
                <section class="reverse-history-section">
                    <h2>Guided Tour</h2>
                    <div class="reverse-history-container">
                        <div class="reverse-history-grid">
                            <article class="history-item">
                                <h3 class="overlay">Revolutionary Williamsburg Tour</h3>
                                <a href="./walking-tours.php#Revolutionary" class="history-link">
                                    <img src="assets/images/Rev_Chesapeake_Desktop.jpg" alt="Revolutionary">
                                </a>
                            </article>
                            <article class="history-item">
                                <h3 class="overlay">Artisans & Trades Tour</h3>
                                <a href="./walking-tours.php#Artisans" class="history-link">
                                    <img src="assets/images/leather_works_Desktop.jpg" alt="Leather Works">
                                </a>
                            </article>
                        </div>
                        <article class="history-item large">
                            <h3 class="overlay">Romantic Evening Carriage Ride</h3>
                            <a href="./carriage-rides.php#CarriageRides" class="history-link">
                                <img src="assets/images/romantic_wythe_carriage_couple_Desktop.jpg" alt="Romantic Carriage">    
                            </a>
                        </article>
                    </div>
                </section>

                <!-- Latest Events Section -->
                <section class="history-section">
                    <h2>Stay and Save </h2>
                    <div class="history-container">
                        <article class="history-item large">
                            <h3 class="overlay">Williamsburg Inn</h3>
                            <a href="./hotels.php#SocialTerrace" class="history-link">
                                <img src="assets/images/Social_Terrace_Desktop.jpg" alt="Social Terrace">    
                            </a>
                        </article>
                        <div class="history-grid">
                            <article class="history-item">
                                <h3 class="overlay">Williamsburg Woodlands Hotel and Suite</h3>
                                <a href="./hotels.php#WilliamburgHotel" class="history-link">
                                    <img src="assets/images/Williamburg_Hotel_Desktop.jpg" alt="Williamburg Hotel">   
                                </a>
                            </article>
                            <article class="history-item">
                                <h3 class="overlay">Cedars Inn</h3>
                                <a href="./historic-inns.php#Cedar" class="history-link">
                                    <img src="assets/images/Cedar_Inn_Desktop.jpg" alt="Cedar">    
                                </a>
                            </article>
                        </div>
                    </div>
                </section>

                <div id="tip-box">
                <i class="fas fa-lightbulb"></i> <span id="tip-text"></span>
                </div>

                <!-- Map Section -->
                <section class="map-section fade-in">
                    <h2>Explore Williamsburg on the Map</h2>
                    <iframe class="gmap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.890977412692!2d-76.71038908468227!3d37.27187347985686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0798dd3ab79ad%3A0x5f3b4d8e29e5e5f2!2sColonial%20Williamsburg%20Visitor%20Center!5e0!3m2!1sen!2sus!4v1675805091045!5m2!1sen!2sus" 
                        width="100" 
                        height="450" 
                        style="border:0; width: 100%;" 
                        allowfullscreen 
                        loading="lazy">
                    </iframe>
                </section>
                
                
                <!-- Quick Links Section -->
            <div class="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="attractions.php"><img src="assets/images/royal-palace.png" alt="Attractions"> Attractions</a></li>
                    <li><a href="events.php"><img src="assets/images/event.png" alt="Events"> Events</a></li>
                    <li><a href="guided-tours.php"><img src="assets/images/tour-guide.png" alt="Guided Tours"> Guided Tours</a></li>
                    <li><a href="travel-tips.php"><img src="assets/images/tip.png" alt="Travel Tips"> Travel Tips</a></li>
                    <li><a href="accommodations.php"><img src="assets/images/accomodation.png" alt="Accommodations"> Accommodations</a></li>
                    <li><a href="special-deals.php"><img src="assets/images/special-offer.png" alt="Special Deals"> Special Deals</a></li>
                </ul>
            </div>
   

    </main>
        <!-- Popup Modal -->
        <?php
            $isLoggedIn = isset($_SESSION['user_id']);
            $offerLink = $isLoggedIn ? "special-deals.php" : "login.php?redirect=special-deals.php";
            ?>

            <div id="popup-modal" class="popup-modal">
                <div class="popup-content">
                    <span class="close-popup">&times;</span>

                    <img src="assets/images/Special_Deal_Pop.jpg" alt="Special Deal">

                    <div class="popup-text">
                        <h3>Welcome to Williamsburg Port!</h3>
                        <p>Check out our latest offers & special deals!</p>
                        <a href="<?php echo $offerLink; ?>" class="ticket-button">View Offers</a>
                    </div>
                </div>
            </div>
<?php require_once('assets/inc/footer.inc.php'); ?>

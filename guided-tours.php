<?php
$pageTitle = "Guided Tours"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="assets/media/Tour_Pages.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay">
                <h1>Guided Tour</h1>
                <p>Explorer a wonderful places</p>
            </div>
        </div>
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Guided Tours</span>
    </nav>

    <main>
        <section class="welcome-attraction-section">
            <h1>Explore Williamsburg with Guided Tours</h1>
            <p><i>Guided tours are the perfect way to experience the rich history and beauty of Williamsburg. Whether you prefer walking through historic streets, riding in a horse-drawn carriage, or enjoying audio-guided adventures, there’s a tour for everyone.</i></p>
        </section>

        <!-- Walking tour -->
        <section class="attractions-container">
            <!--Current event-->
            <div class="attraction-box">
                <h2>Walking tours</h2>
                <p>Step into history with us</p>
                <a href="./walking-tours.php#WalkingTour" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Walking_tour_colonial_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Walking_tour_colonial_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Walking_tour_colonial_Desktop.jpg" alt="Walking tour">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Walking Tours</div>
                        <div class="description-subpage">Explore Williamsburg’s history on guided walking tours of iconic landmarks.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div> 
                </a>
            
                <a href="./walking-tours.php#Haunted" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/haunted_williamsburg_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/haunted_williamsburg_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/haunted_williamsburg_Desktop.jpg" alt="Haunted Williamsburg">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Ghosts of Williamsburg Night Tour</div>
                        <div class="description-subpage">Experience Haunted Williamsburg’s ghost tour with eerie stories and candlelit walks.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            
                <a href="./walking-tours.php#Revolutionary" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Rev_Chesapeake_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Rev_Chesapeake_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Rev_Chesapeake_Desktop.jpg" alt="Chesapeake">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Revolutionary Williamsburg Tour</div>
                        <div class="description-subpage">Explore Revolutionary sites with expert historians where independence was forged.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            
                <a href="./walking-tours.php#Artisans" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/leather_works_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/leather_works_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/leather_works_Desktop.jpg" alt="Leather work">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Artisans & Trades Tour</div>
                        <div class="description-subpage">Watch artisans craft goods using 18th-century techniques in Williamsburg.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            </div>

            <!-- Carriage rides -->
            <div class="attraction-box">
                <h2>Carriage Rides</h2>
                <p>Relax and take in the sights of colonial Williamsburg from the comfort of a horse-drawn carriage.</p>
                <a href="./carriage-rides.php#CarriageRides" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Carriage_Rides_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Carriage_Rides_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Carriage_Rides_Desktop.jpg" alt="Carriage rides">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Historic Carriage Ride</div>
                        <div class="description-subpage">Take a scenic carriage ride with historic commentary in Williamsburg.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div> 
                </a>
            
                <a href="./carriage-rides.php#RomanticCarriage" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/romantic_wythe_carriage_couple_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/romantic_wythe_carriage_couple_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/romantic_wythe_carriage_couple_Desktop.jpg" alt="Romantic carriage rides">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Romantic Evening Carriage Ride</div>
                        <div class="description-subpage">Relax on a historic carriage ride with engaging driver commentary.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            
                <a href="./carriage-rides.php#StageCoach" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/stage_coach_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/stage_coach_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/stage_coach_Desktop.jpg" alt="family Carriage rides">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Family Fun Carriage Adventure</div>
                        <div class="description-subpage">Enjoy a family-friendly tour with colonial history and a horse-drawn ride.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            
                <a href="./carriage-rides.php#MadisonCarraige" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/madison_carriage_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/madison_carriage_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/madison_carriage_Desktop.jpg" alt="Blue carriage rides">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Blue Carriage Rides</div>
                        <div class="description-subpage">Ride a blue carriage through Williamsburg’s history with expert guides.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            </div>

            <!-- Audio Tour -->
            <div class="attraction-box">
                <h2>Audio Tour</h2>
                <p>Immerse in history and sound.</p>
                <a href="./audio-tours.php#SelfGuided" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/capitol_colonial_tablet.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/capitol_colonial_mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/capitol_colonial_desktop.jpg" alt="Colonial Capitol">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Colonial Williamsburg</div>
                        <div class="description-subpage">Explore Colonial Williamsburg’s landmarks with an engaging audio tour experience.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div> 
                </a>
            
                <a href="./audio-tours.php#JamestownAudio" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Jamestown_Museums_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Jamestown_Museums_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Jamestown_Museums_Desktop.jpg" alt="Jamestown settlment">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/tour-guide.png" alt="Guided tour Icon"></div>
                        <div class="title-subpage">Jamestown Settlement</div>
                        <div class="description-subpage">Discover Colonial Williamsburg’s landmarks through an engaging audio tour experience.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                    </div>
                </a>
            </div>


        </section>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>
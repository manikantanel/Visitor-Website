<?php
$pageTitle = "Accommodations"; 
require_once('assets/inc/header.inc.php');
?>

  <!-- Hero Section with Full-Screen Video -->
  <section class="hero-section">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="assets/media/4K_Williamburg_Inn.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay">
                <h1>Cozy Accommodations Await</h1>
                <p>Stay, Sleep, Rest, Unwind, Enjoy</p>
            </div>
        </div>
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Accommodation</span>
    </nav>


    <main>
        <section class="welcome-attraction-section">
            <h1>Accommodations in Williamsburg</h1>
            <p><i>Whether you're looking for luxury hotels, historic inns, or cozy local restaurants with lodging options, Williamsburg has something to fit your needs.</i></p>
        </section>

         <!-- Attractions Flexbox Container -->
        <section class="attractions-container">

            <!-- Hotel -->
            <div class="attraction-box">
                <h2>Hotels</h2>
                <p>Find comfortable and convenient hotels offering premium services, ideal for both families and business travelers.</p>
                <a href="./hotels.php#SocialTerrace" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Social_Terrace_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Social_Terrace_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Social_Terrace_Desktop.jpg" alt="Social Terrace">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Williamsburg Inn</div>
                        <div class="description-subpage">Experience historic charm and modern luxury at the iconic Williamsburg Inn.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./hotels.php#Lodge" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Williamsburg_Lodge_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Williamsburg_Lodge_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Williamsburg_Lodge_Desktop.jpg" alt="Williamsburg Lodge">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Williamsburg Lodge</div>
                        <div class="description-subpage">Stay at Williamsburg Lodge, where history meets modern comfort and elegance.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./hotels.php#WilliamburgHotel" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Williamburg_Hotel_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Williamburg_Hotel_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Williamburg_Hotel_Desktop.jpg" alt="Williamburg Hotel">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Williamsburg Woodlands Hotel and Suite</div>
                        <div class="description-subpage">Enjoy family-friendly comfort and exclusive access at Williamsburg Woodlands Hotel.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./hotels.php#Griffin" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Griffin_Hotel_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Griffin_Hotel_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Griffin_Hotel_Desktop.jpg" alt="Griffin Hotel">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Griffin Hotel</div>
                        <div class="description-subpage">Relax at Griffin Hotel with scenic views and historic Williamsburg access.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            </div>

            <!-- Historic Inn -->
            <div class="attraction-box">
                <h2>Historic Inn</h2>
                <p>Find comfortable and convenient hotels offering premium services, ideal for both families and business travelers.</p>
                <a href="./historic-inns.php#Cedar" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Cedar_Inn_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Cedar_Inn_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Cedar_Inn_Desktop.jpg" alt="Cedar">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">The Cedars of Williamsburg Bed & Breakfast Inn</div>
                        <div class="description-subpage">Stay at The Cedars for charm, gardens, and Williamsburg attractions nearby.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./historic-inns.php#EwingHouse" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Ewing_Shop_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Ewing_Shop_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Ewing_Shop_Desktop.jpg" alt="Ewing house">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Ewing House</div>
                        <div class="description-subpage">Explore Ewing Storehouse, a historic colonial gem on E. Francis Street.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./historic-inns.php#Armistead" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Armistead_House_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Armistead_House_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Armistead_House_Desktop.jpg" alt="Armistead House">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Armistead House</div>
                        <div class="description-subpage">Stay at Armistead House for convenience, history, and private parking.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./historic-inns.php#Richard" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Tavren_House_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Tavren_House_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Tavren_House_Desktop.jpg" alt="Richard Crump House">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/accomodation.png" alt="Accomodation Icon"></div>
                        <div class="title-subpage">Richard Crump House</div>
                        <div class="description-subpage">Discover Richard Crump House, a preserved colonial gem in Williamsburg.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            </div>

            <!-- Restaurants-->
            <div class="attraction-box">
                <h2>Restaurants</h2>
                <p>Enjoy authentic colonial meals and stay the night in one of Williamsburg’s cozy restaurant lodges.</p>
                <a href="./restaurants.php#Christiana" class="card-subpage">
                <div class ="restaurants-background">
                    <img src="assets/images/Christiana-Campbells-Tavern-200x237.webp" alt="Christiana Campbells">
                </div>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/restuarant.png" alt="restuarant Icon"></div>
                        <div class="title-subpage">Christiana Campbell’s Tavern</div>
                        <div class="description-subpage">Dine at Christiana Campbell’s Tavern for historic seafood favorites and charm.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./restaurants.php#kingsArms" class="card-subpage">
                <div class ="restaurants-background">
                    <img src="assets/images/KAT_Logo-200x135.webp" alt="King arms logo">
                </div>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/restuarant.png" alt="restuarant Icon"></div>
                        <div class="title-subpage">King’s Arms Tavern</div>
                        <div class="description-subpage">Enjoy historic seafood dishes at Christiana Campbell’s Tavern, George Washington’s favorite.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./restaurants.php#Rockefeller" class="card-subpage">
                <div class ="restaurants-background">
                    <img src="assets/images/rockefeller-room-logo-200x158.webp" alt="Rockefeller">
                </div>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/restuarant.png" alt="restuarant Icon"></div>
                        <div class="title-subpage">Rockefeller</div>
                        <div class="description-subpage">The Rockefeller Room reopens in Spring for refined dining and elegance.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./restaurants.php#ShieldsTavern" class="card-subpage">
                <div class ="restaurants-background">
                    <img src="assets/images/shields-transp-200x222.webp" alt="Shields Tavern">
                </div>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/restuarant.png" alt="restuarant Icon"></div>
                        <div class="title-subpage">Shields Tavern</div>
                        <div class="description-subpage">Experience Shields Tavern’s historic charm with food, drink, and entertainment.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            </div>

        </section>
       
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>


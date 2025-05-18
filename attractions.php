<?php
$pageTitle = "Attractions"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="assets/media/attractions_hero_video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay">
                <h1>Attractions</h1>
                <p>Discover history, culture, and breathtaking attractions.</p>
            </div>
        </div>
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Attractions</span>
    </nav>


    <main>
        <section class="welcome-attraction-section">
            <h1>Explore Attractions in Williamsburg Port</h1>
            <p><i>Discover the rich history and natural beauty of Williamsburg Port. Whether you're interested in historic landmarks, museums, or nature, there's something for everyone.</i></p>
        </section>

        <!-- Attractions Flexbox Container -->
        <section class="attractions-container">

            <!-- Historic Sites Card-->
            <div class="attraction-box">
                <h2>Historic sites</h2>
                <p>Step back in time and explore key locations that shaped America’s early history.</p>
                <a href="./historic-sites.php#Governor" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Governor_Palace_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Governor_Palace_mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Governor_Palace_Desktop.jpg" alt="Main Entry Pavilion">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage">
                            <img src="assets/images/castle_small.png" alt="Icon">
                        </div>
                        <div class="title-subpage">Governor's Palace</div>
                        <div class="description-subpage">Explore the residence of Virginia's royal governors.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./historic-sites.php#Capitol" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Capitol_tablet.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Capitol_mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Capitol_desktop.jpg" alt="Capitol">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/castle_small.png" alt="Icon"></div>
                        <div class="title-subpage">Capitol</div>
                        <div class="description-subpage">Rediscover the founding principles of our American government.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./historic-sites.php#Powder" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Powder_magazine_desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Powder_magazine_mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Powder_magazine_desktop.jpg" alt="Powder magazine">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/castle_small.png" alt="Icon"></div>
                        <div class="title-subpage">Powder Magazine</div>
                        <div class="description-subpage">Powder Magazine is temporarily closed for restoration to preserve its history.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./historic-sites.php#Georgewythe" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Wythe_House_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Wythe_House_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Wythe_House_Desktop.jpg" alt="George Wythe House">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/castle_small.png" alt="Icon"></div>
                        <div class="title-subpage">Colonial Williamsburg</div>
                        <div class="description-subpage">Step back in time and experience 18th-century life.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            </div>

            <!-- Museums -->
            <div class="attraction-box">
                <h2>Museums</h2>
                <p>Immerse yourself in history, culture, and art through Williamsburg’s top museums.</p>
                <a href="./museums.php#ArtMuseums" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Art_Museums_Desktop.jpg" alt="Art Museums">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/museum.png" alt="Museum Icon"></div>
                        <div class="title-subpage">Art Museums of Colonial Williamsburg</div>
                        <div class="description-subpage">Explore antiques, decorative arts, and folk art at our renowned museums.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./museums.php#AbbyMuseum" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Abby_Aldrich_Rockefeller_Folk_Art_Museum_Wiki_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Abby_Aldrich_Rockefeller_Folk_Art_Museum_Wiki_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Abby_Aldrich_Rockefeller_Folk_Art_Museum_Wiki_Desktop.jpg" alt="Abby Aldrich Rockefeller Folk Art Museum">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/museum.png" alt="Museum Icon"></div>
                        <div class="title-subpage">Abby Aldrich Rockefeller Folk Art Museum</div>
                        <div class="description-subpage">Rediscover the founding principles of our American government.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./museums.php#JamestownMuseums" class="card-subpage">
                <picture>
                    <source srcset="assets/images/Jamestown_Museums_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Jamestown_Museums_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Jamestown_Museums_Desktop.jpg" alt="Jamestown Museums">
                </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/museum.png" alt="Museum Icon"></div>
                        <div class="title-subpage">Jamestown Settlement Museum</div>
                        <div class="description-subpage">Explore Jamestown Settlement’s immersive exhibits, films, and historical re-creations.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./museums.php#AmericanRevolution" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/American_Revolution_Museum_Yorktown_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/American_Revolution_Museum_Yorktown_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/American_Revolution_Museum_Yorktown_Desktop.jpg" alt="American Revolution Museum">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/museum.png" alt="Museum Icon"></div>
                        <div class="title-subpage">American Revolution Museum at Yorktown</div>
                        <div class="description-subpage">Discover Yorktown’s Revolutionary War history through immersive exhibits and reenactments.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            </div>

            <!-- Parks and Nature-->
            <div class="attraction-box">
                <h2>Parks & Nature</h2>
                <p>Step back in time and explore key locations that shaped America’s early history.</p>
                <a href="./parks-nature.php#YorkRiver" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Entrance_York_Park_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Entrance_York_Park_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Entrance_York_Park_Desktop.jpg" alt="Entracne york park">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/park.png" alt="Park Icon"></div>
                        <div class="title-subpage">York River State Park</div>
                        <div class="description-subpage">Enjoy trails, wildlife, and water activities at York River State Park.</div>
                    </div>
                </a>            
            
                <a href="./parks-nature.php#ColonialPark" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Colonial_Parkway_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Colonial_Parkway_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Colonial_Parkway_Desktop.jpg" alt="Colonial Parkway">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/park.png" alt="Park Icon"></div>
                        <div class="title-subpage">Colonial National Historical Park</div>
                        <div class="description-subpage">Explore history and nature at Colonial National Historical Park, Jamestown, Yorktown.</div>
                    </div>
                </a>
            
                <a href="./parks-nature.php#WallerPark" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Boat_Waller_mill_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Boat_Waller_mill_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Boat_Waller_mill_Desktop.jpg" alt="Boat Park waller">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/park.png" alt="Park Icon"></div>
                        <div class="title-subpage">Waller Mill Park</div>
                        <div class="description-subpage">Hike, fish, kayak, and picnic at Waller Mill Park’s reservoir.</div>
                    </div>
                </a>
            
                <a href="./parks-nature.php#FreedomPark" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Freedom_Park_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Freedom_Park_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Freedom_Park_Desktop.jpg" alt="Freedom park">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/park.png" alt="Park Icon"></div>
                        <div class="title-subpage">Freedom Park</div>
                        <div class="description-subpage">Explore biking trails, history, and nature at Freedom Park’s forested landscape.</div>
                    </div>
                </a>
            </div>

        </section>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>
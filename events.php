<?php
$pageTitle = "Events"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="assets/media/Events_Hero_Section.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay">
                <h1>Events in Williamsburg</h1>
                <p>Williamsburg is known for its vibrant events, from historical reenactments to modern festivals. Explore our event categories below to plan your visit.</p>
            </div>
        </div>
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt;
        <span>Events</span>
    </nav>


    <main>
        <section class="welcome-attraction-section">
            <h1>Discover Exciting Events in Williamsburg Port</h1>
            <p><i>From historical reenactments and seasonal festivals to live music and family-friendly gatherings, Williamsburg Port offers a diverse array of events for visitors of all ages. Join us in celebrating the past, present, and future of this remarkable destination.</i></p>
        </section>

        <!-- Attractions Flexbox Container -->
        <section class="attractions-container">
            <!--Current event-->
            <div class="attraction-box">
                <h2>Current events</h2>
                <p>Step back in time and explore key locations that shaped America’s early history.</p>
                <a href="./current-events.php#Pirate" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Pirate_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Pirate_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Pirate_Desktop.jpg" alt="Pirate">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">To Hang a Pirate</div>
                        <div class="description-subpage">Pirate trial reenactment at Williamsburg’s Capitol—witness history unfold dramatically!</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./current-events.php#GeorgeWashington" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/george_washington_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/george_washington_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/george_washington_Desktop.jpg" alt="George Washington">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">Visit with General George Washington</div>
                        <div class="description-subpage">RExplore George Washington’s journey through stories, questions, and leadership reflections.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./current-events.php#PalaceConcert" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Current_Events_Hero_section_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Current_Events_Hero_section_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Current_Events_Hero_section_Desktop.jpg" alt="Historic Elegance">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">Palace Concert: An Evening of Historic Elegance</div>
                        <div class="description-subpage">Enjoy historic chamber music at the Governor’s Palace with Governor’s Musick.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./current-events.php#CryWitch" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/cry_witch_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/cry_witch_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/cry_witch_Desktop.jpg" alt="Cry Witch">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">Cry Witch</div>
                        <div class="description-subpage">Decide Grace Sherwood’s fate in an intense, interactive courtroom experience.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            </div>

            <!-- Annual Festival -->
            <div class="attraction-box">
                <h2>Annual Festival</h2>
                <p>Step back in time and explore key locations that shaped America’s early history.</p>
                <a href="./annual-festivals.php#2ndSunday" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/2ndSundayFestival_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/2ndSundayFestival_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/2ndSundayFestival_Desktop.jpg" alt="2ndSundayFestival">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">2nd Sundays Art & Music Festiva</div>
                        <div class="description-subpage">Experience a lively festival with artisans, music, performers, food, and fun!</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div> 
                </a>
            
                <a href="./annual-festivals.php#VirginiaArts" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/dancing_palace_feet_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/dancing_palace_feet_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/dancing_palace_feet_Desktop.jpg" alt="Dancing palace">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">Virginia Arts Festival at William & Mary Concert Hall</div>
                        <div class="description-subpage">Enjoy world-class performances in music, dance, and theater at Williamsburg.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./annual-festivals.php#GrandIllum" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/Colonial_Williamsburg_GrandIllumination_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/Colonial_Williamsburg_GrandIllumination_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/Colonial_Williamsburg_GrandIllumination_Desktop.jpg" alt="Grand Illumination">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">Grand Illumination</div>
                        <div class="description-subpage">Celebrate the season with fireworks, music, and candlelit windows in Williamsburg.</div>
                    </div>
                    <div class="footer-subpage">
                        <img src="assets/images/ticket_large.png" alt="Icon"> CW Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </a>
            
                <a href="./annual-festivals.php#OccasionArts" class="card-subpage">
                    <picture>
                        <source srcset="assets/images/AOFTA_tents_Desktop.jpg" media="(min-width: 800px)">
                        <source srcset="assets/images/AOFTA_tents_Mobile.jpg" media="(max-width: 799px)">
                        <img src="assets/images/AOFTA_tents_Desktop.jpg" alt="AOFTA tents">
                    </picture>
                    <div class="card-content-subpage">
                        <div class="icon-subpage"><img src="assets/images/event.png" alt="Event Icon"></div>
                        <div class="title-subpage">An Occasion for the Arts</div>
                        <div class="description-subpage">Step back in time and experience 18th-century life.</div>
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


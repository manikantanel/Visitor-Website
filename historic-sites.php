<?php
    $pageTitle = "Historic Sites"; 
 require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Historic Williamsburg</h1>
            <p>Step back in time and explore the rich history of Williamsburg.</p>
        </div>
        <img src="assets/images/Governor_Palace_Desktop.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="attractions.php">Attractions</a> &gt;
        <span>Historic sites</span>
    </nav>
    


    <main>
        <!-- Image Viewer with Caption Only Visible Here -->
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
            <h1>Historic Sites in Williamsburg Port</h1>
            <p><i>Explore the landmarks that played a pivotal role in shaping American history.</i></p>
        </section>

        <article id="Capitol" class="attraction-detail odd">
            <h2>Colonial Williamsburg</h2>
            <div  class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Capitol_tablet.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Capitol_mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Capitol_desktop.jpg" alt="Capitol">
                </picture>
                <div class="text-content">
                    <p>Step back into the 18th century and experience a living history museum featuring restored buildings, historic reenactments, and immersive guided tours.</p>
                    <p><strong>Visiting Hours:</strong> 9 AM - 5 PM</p>
                    <p><strong>Location:</strong> 101 Visitor Center Drive, Williamsburg, VA</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            
            <section class="gallery-container">
                <h2>Explore the Interiors</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Virginia_Coat_of_arm_capitol_medium.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Virginia_Coat_of_arm_capitol_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Virginia_Coat_of_arm_capitol_medium.jpg" alt="Virgnia coat of arm">
                        </picture>
                        <figcaption>Virgnia coat of arm</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/House_Of_Burgesses_Chamber_tablet.webp" media="(min-width: 800px)">
                            <source srcset="assets/images/House_Of_Burgesses_Chamber_mobile.webp" media="(max-width: 799px)">
                            <img src="assets/images/House_Of_Burgesses_Chamber_desktop.webp" alt="House of burgesses chamber">
                        </picture>
                        <figcaption>House of burgesses chamber</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Speaker_Chair_Capitol_Tablet.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Speaker_Chair_Capitol_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Speaker_Chair_Capitol_Desktop.jpg" alt="Speaker chair">
                        </picture>
                        <figcaption>Speaker chair</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/General_Courtroom_Capitol_Tablet.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/General_Courtroom_Capitol_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/General_Courtroom_Capitol_Desktop.jpg" alt="General courtroom">
                        </picture>
                        <figcaption>General courtroom</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Committee_Room_tablet.webp" media="(min-width: 800px)">
                            <source srcset="assets/images/Committee_Room_mobile.webp" media="(max-width: 799px)">
                            <img src="assets/images/Committee_Room_desktop.webp" alt="Committee Room">
                        </picture>
                        <figcaption>Committee room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Council_Chamber_tablet.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Council_Chamber_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Council_Chamber_desktop.jpg" alt="Capitol Cover Second View">
                        </picture>
                        <figcaption>Capitol Cover Second View</figcaption>
                    </figure>
                </div>
            </section>
            
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Colonial Williamsburg"
                src="https://maps.google.com/maps?q=499%20E%20Duke%20of%20Gloucester%20St,%20Williamsburg,%20VA&t=&z=15&ie=UTF8&iwloc=&output=embed"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Story about colonial capitol</h2>
                <p>
                    Fire burns through the story of Virginia’s colonial Capitol. On Halloween 1698, 
                    the Virginia statehouse in Jamestown, the previous capital city, went up in flames. 
                    It was the fourth time that fire had evicted Jamestown’s legislators.
                    They decided to move the capital city to Williamsburg and set about constructing 
                    a Capitol building. It was completed in 1705.
                </p>
            </div>
            <div class="video-content" role="region" aria-label="Colonial Williamsburg Historic Area Overview">
            <iframe 
                style="width: 100%;" 
                height="315" 
                src="https://www.youtube.com/embed/9sRrIWE3Jes" 
                title="Colonial Williamsburg Historic Area Overview"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            </div>

        </div>

        <article id="Governor" class="attraction-detail odd">
            <h2>Governor’s Palace</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Governor_Palace_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Governor_Palace_mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Governor_Palace_Desktop.jpg" alt="Governor Palace">
                </picture>
                <div class="text-content">
                    <p>Experience the grandeur of the Governor’s Palace, where colonial leaders lived in luxury. Explore its lavish halls, stunning gardens, and rich history, immersing yourself in 18th-century elegance and political intrigue.</p>
                    <p><strong>Visiting Hours:</strong> 9 AM - 5 PM</p>
                    <p><strong>Location:</strong> 300 Palace Green St, Williamsburg, VA</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Explore the Interiors</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/hundred_swords_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/hundred_swords_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/hundred_swords_desktop.jpg" alt="Hundered swords">
                        </picture>
                        <figcaption>Hundered of swords</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/dineds_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/dineds_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/dineds_desktop.jpg" alt="Dined">
                        </picture>
                        <figcaption>Dined</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/palace_ballroom_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/palace_ballroom_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/palace_ballroom_desktop.jpg" alt="Palace ballroom">
                        </picture>
                        <figcaption>Palace ballroom</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/thomas_bed_room_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/thomas_bed_room_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/thomas_bed_room_desktop.jpg" alt="Thomas bed chamber">
                        </picture>
                        <figcaption>Thomas bed chamber</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/daughter_bed_room_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/daughter_bed_room_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/daughter_bed_room_desktop.jpg" alt="Daughter bed room">
                        </picture>
                        <figcaption>Daughter bed room</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/staircase_governor_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/staircase_governor_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/staircase_governor_desktop.jpg" alt="Staircase">
                        </picture>
                        <figcaption>Staircase</figcaption>
                    </figure>
                </div>
            </section>
            <div class="map-container fade-in ">
            <iframe 
                class="gmap"
                title="Map of Governor's Palace"
                src="https://maps.google.com/maps?q=Governor's+Palace,300+Palace+Green+St,Williamsburg,VA&t=&z=15&ie=UTF8&iwloc=&output=embed"
                width="100"
                height="300"
                style="width: 100%; border: 0;"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Story about Governor’s palace</h2>
                <p>Visitors admired the Palace’s Palladian architecture and gardens. One observer claimed it “far exceeded” ancient temples. Another noted Williamsburg’s simplicity, stating, “Nothing is considerable but the College, the Governor’s House, and one or two more, which are no bad Piles.” The Palace stood as Williamsburg’s most elegant structure.</p>
            </div>
            <div class="video-content" role="region" aria-label="Colonial Williamsburg Duke of Gloucester Street Tour">
            <iframe 
                style="width: 100%;" 
                height="315" 
                src="https://www.youtube.com/embed/7Wy4Kn0Q3XI?start=2" 
                title="Colonial Williamsburg Duke of Gloucester Street Tour"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            </div>

        </div>

        <article id="Powder" class="attraction-detail odd">
            <h2>Powder Magazine</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Powder_magazine_desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Powder_magazine_mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Powder_magazine_desktop.jpg" alt="Powder magazine">
                </picture>
                <div class="text-content">
                    <p>The 1715 Powder Magazine stored weapons for colonial defense. Before the Revolution, soldiers removed gunpowder, sparking tensions. This historic site symbolizes early resistance. Reopening soon.</p>
                    <p><strong>Location:</strong> 307 S Nassau St, Williamsburg, VA</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Explore the Interiors</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/inside_powder_magazine_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/inside_powder_magazine_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/inside_powder_magazine_desktop.jpg" alt="Powder Magazine">
                        </picture>
                        <figcaption>Inside</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/man_worker_tablet.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/man_worker_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/man_worker_tablet.jpg" alt="Man worker">
                        </picture>
                        <figcaption>Man worker</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/archaeology_worker_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/archaeology_worker_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/archaeology_worker_desktop.jpg" alt="Archaeology worker">
                        </picture>
                        <figcaption>Archaeology worker</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/water_bottle_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/water_bottle_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/water_bottle_desktop.jpg" alt="Water bottle">
                        </picture>
                        <figcaption>Collection of water bottle</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/gun_stand_on_wall_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/gun_stand_on_wall_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/gun_stand_on_wall_desktop.jpg" alt="Collected gun">
                        </picture>
                        <figcaption>Collection of gun</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/gun_on_wall_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/gun_on_wall_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/gun_on_wall_desktop.jpg" alt="Gun on wall">
                        </picture>
                        <figcaption>Flintlock rifles on wall</figcaption>
                    </figure>
                </div>
            </section>
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Powder Magazine"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.5000000000005!2d-76.70350000000002!3d37.272500000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08e1000000000%3A0xabcdefabcdefabcd!2sPowder%20Magazine!5e0!3m2!1sen!2sus!4v1700000000004" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        
        <div class="content-container">
            <div class="text-content">
                <h2>Story about powder magazine</h2>
                <p>The Powder Magazine played a critical role in colonial defense, storing vital arms and ammunition. It was at the center of a dramatic historical event when royal soldiers removed gunpowder, escalating tensions that led to the Revolution. Visitors will appreciate its significance in early American resistance, and the upcoming restoration will ensure its rich history continues to be shared with future generations.</p>
            </div>
            <div class="video-content" role="region" aria-label="History Tour: Colonial Williamsburg Introduction">
            <iframe 
                style="width: 100%;" 
                height="315" 
                src="https://www.youtube.com/embed/x96VGQvsCWI?start=46" 
                title="History Tour: Colonial Williamsburg Introduction"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            </div>

        </div>

        <article id="Georgewythe" class="attraction-detail odd">
            <h2>George Wythe House</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Wythe_House_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Wythe_House_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Wythe_House_Desktop.jpg" alt="George Wythe House">
                </picture>
                <div class="text-content">
                    
                    <p>Explore the historic George Wythe House, where Enlightenment ideals influenced the American Revolution, shaping liberty, justice, and independence discussions among residents.</p>
                    <p><strong>Location:</strong> 101 Palace Green St, Williamsburg, VA</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Explore the Interiors</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/fireplace_george_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/fireplace_george_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/fireplace_george_desktop.jpg" alt="Fireplace">
                        </picture>
                        <figcaption>Fireplace</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/george_wythe_dining_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/george_wythe_dining_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/george_wythe_dining_desktop.jpg" alt="Dining">
                        </picture>
                        <figcaption>Dining</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/george_wythe_cooper_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/george_wythe_cooper_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/george_wythe_cooper_desktop.jpg" alt="Wooden craft">
                        </picture>
                        <figcaption>Wooden craft</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Musician_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Musician_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Musician_desktop.jpg" alt="Musician">
                        </picture>
                        <figcaption>Musician</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/George_Bedroom_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/George_Bedroom_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/George_Bedroom_desktop.jpg" alt="George bedroom">
                        </picture>
                        <figcaption>George bedroom</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/George_Living_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/George_Living_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/George_Living_desktop.jpg" alt="George living">
                        </picture>
                        <figcaption>George living</figcaption>
                    </figure>
                </div>
            </section>
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of George Wythe House"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.4500000000003!2d-76.70750000000001!3d37.272000000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08e1000000000%3A0xabcdefabcdefabcd!2sGeorge%20Wythe%20House!5e0!3m2!1sen!2sus!4v1700000000006" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <section class="content-container">
            <div class="text-content">
                <h2>Story about George Wythe House</h2>
                <p>Delve into the legends and historical mysteries surrounding the house, especially during the Halloween season. Some believe the home holds secrets beyond history, making it an intriguing site for visitors who appreciate both fact and folklore.</p>
            </div>
            <div class="video-content" role="region" aria-label="Video about George Wythe House">
            <iframe 
                style="width: 100%;" 
                height="315" 
                src="https://www.youtube.com/embed/kdrFDQjOuF0" 
                title="Video about George Wythe House"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            </div>

        </section>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>


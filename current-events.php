<?php
$pageTitle = "Current events"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Current Events at Williamsburg Port</h1>
            <p>Experience live reenactments, guided tours, and special exhibits showcasing Colonial Virginia's rich history. Don't miss the upcoming maritime festival this weekend!</p>
        </div>
        <img src="assets/images/Current_Events_Hero_section.webp" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="events.php">Events</a> &gt;
        <span>Current Event</span>
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
            <h1>Current Events</h1>
            <p><i>Stay updated on the latest events and performances happening in Williamsburg during your visit.</i></p>
        </section>

        <article id="Pirate" class="attraction-detail odd">
            <h2>To Hang a Pirate</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Pirate_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Pirate_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Pirate_Desktop.jpg" alt="Pirate">
                </picture>
                <div class="text-content">
                    
                    <p>Witness the 1719 trial of Israel Hands, Blackbeard’s crew member, at Williamsburg’s Capitol. Experience dramatic courtroom proceedings and decide a pirate’s fate in this immersive reenactment.</p>
                    <p><strong>Visiting Hours:</strong> 7:30 PM - 8:30 PM</p>
                    <p><strong>Location:</strong> 500 E Duke of Gloucester St, Williamsburg, VA 23185.</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of To Hang a Pirate event" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.6213898298424!2d-76.7074579234677!3d37.27070257216366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0891dcfdf5c7d%3A0x42bff118d9273519!2s500%20E%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1708378572943"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Blackbeard's Legacy in Colonial Williamsburg</h2>
                <p>
                Did you know Blackbeard’s notorious reign ended in Colonial Williamsburg? Despite receiving a royal pardon, Virginia’s governor ordered his capture in November 1718. Witness the dramatic final moments of the infamous pirate and discover how his story became part of Williamsburg’s rich history.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"  
                    src="https://www.youtube.com/embed/E06pJFH_n_g" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="GeorgeWashington" class="attraction-detail odd">
            <h2>Visit with General George Washington</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/george_washington_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/george_washington_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/george_washington_Desktop.jpg" alt="George Washington">
                </picture>
                <div class="text-content">
                    
                    <p>
                        Journey into history with George Washington, exploring his hopes, choices, and challenges through engaging stories, thought-provoking questions, and insightful reflections on leadership.
                    </p>
                    <p><strong>Date:</strong> October 31, 2025</p>    
                    <p><strong>Visiting Hours:</strong> 7 PM - 8 PM</p>
                    <p><strong>Location:</strong> 300 Palace Green St, Williamsburg, VA 23185</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Visit with General George Washington event"  
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.8891437659045!2d-76.70473042495507!3d37.27405577211581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0890ede476d21%3A0x20f58a903c314b9c!2sGovernor&#39;s%20Palace!5e0!3m2!1sen!2sus!4v1740975936352!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>George Washington in Williamsburg – Exploring the Places He Roamed</h2>
                <p>Explore Colonial Williamsburg through George Washington’s eyes, discovering his visits, meetings, journal entries, and historic landmarks in America’s revolutionary past.</p>
            </div>
            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"  
                    src="https://www.youtube.com/embed/IWd08IMrwCc" 
                    title="YouTube video player" 
                   
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="PalaceConcert" class="attraction-detail odd">
            <h2>Palace Concert: An Evening of Historic Elegance</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Current_Events_Hero_section_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Current_Events_Hero_section_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Current_Events_Hero_section_Desktop.jpg" alt="Historic Elegance">
                </picture>
                <div class="text-content">
                    
                    <p>
                        Experience Governor’s Musick at the Governor’s Palace, featuring 17th- and 18th-century chamber music on harpsichord, flute, and strings. Enjoy historic melodies from Virginia and Europe.
                    </p>
                    <p><strong>Date:</strong> April 29, 2025</p>
                    <p><strong>Visiting Hours:</strong> 7 PM - 8 PM</p>
                    <p><strong>Location:</strong> 307 S Nassau St, Williamsburg, VA</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Palace Concert: An Evening of Historic Elegance event" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.1206979976746!2d-76.70650362495542!3d37.268564872117274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08909e5c2d053%3A0x52f79135e1fb217e!2s307%20S%20Nassau%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1740979719344!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        
        <div class="content-container">
            <div class="text-content">
                <h2>Music in the Galleries: Discover 18th-Century Instruments</h2>
                <p>
                    Experience Governor’s Musick at the Governor’s Palace, featuring 17th- and 18th-century chamber music on harpsichord, flute, and strings. Enjoy historic melodies from Virginia and Europe.
                </p>
            </div>
            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/LKJ8TL277hw" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="CryWitch" class="attraction-detail odd">
            <h2>Cry Witch</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/cry_witch_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/cry_witch_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/cry_witch_Desktop.jpg" alt="Cry Witch">
                </picture>
                <div class="text-content">
                    
                    <p>Decide Grace Sherwood’s fate in an interactive trial. Question witnesses, examine evidence, and vote on Virginia’s infamous witch in this dramatic experience.</p>
                    <p><strong>Date:</strong> March 14, 2025</p>
                    <p><strong>Visiting Hours:</strong> 7 PM - 8 PM</p>
                    <p><strong>Location:</strong> Capitol General Court, 500 E Duke of Gloucester St, Williamsburg, VA 23185</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                        <img src="assets/images/disabled.png" alt="Handicap Accessible Icon"> Handicap Accessible
                    </div>
                </div>
            </div>
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Cry Witch event" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.6213898298424!2d-76.7074579234677!3d37.27070257216366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b0891dcfdf5c7d%3A0x42bff118d9273519!2s500%20E%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1708381609372" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Cry Witch: The Trial of Grace Sherwood</h2>
                <p>
                    Was Grace Sherwood truly a witch or an innocent victim of suspicion?  
                    Step into the courtroom, question witnesses, examine the evidence, and cast your final vote.  
                    Will history repeat itself, or will you change her fate?  
                    The decision is in your hands!
                </p>
            </div>
            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/dIQrXh7A2-M" 
                    title="George Wythe House History and Legends" 
                  
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>
    <?php require_once('assets/inc/footer.inc.php'); ?>

    
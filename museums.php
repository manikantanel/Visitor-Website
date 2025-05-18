<?php
    $pageTitle = "Museums"; 
    require_once('assets/inc/header.inc.php');
?>

  <!-- Hero Section with Full-Screen Video -->
  <section class="hero-section">
        <div class="hero-overlay">
            <h1>Explore Williamsburg's Museums</h1>
            <p>Discover a treasure trove of history, art, and culture at Williamsburg’s finest museums.</p>
        </div>
        <img src="assets/images/02_Main-Entry-Pavillion,-Art-Museums-of-Colonial-Williamsburg.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>

    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="attractions.php">Attractions</a> &gt;
        <span>Museums</span>
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
            <h1>Welcome to Williamsburg’s Museums</h1>
            <p>Step into a world of discovery where history meets innovation. Williamsburg's museums offer engaging exhibits, interactive displays, and immersive experiences that bring the past to life. From colonial artifacts to contemporary art, explore a diverse range of attractions that educate and inspire visitors of all ages.</p>
        </section>
        <article id="ArtMuseums" class="attraction-detail odd">
            <h2>Art Museums of Colonial Williamsburg</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Art_Museums_Desktop.jpg" alt="Fireplace">
                </picture>
                <div class="text-content">
                    
                    <p>Explore American and British antiques, decorative arts, and folk art at the DeWitt Wallace and Abby Aldrich Rockefeller Museums, now under one roof on Nassau Street.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> 301 S Nassau St, Williamsburg, VA 23185</p>
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
                            <source srcset="assets/images/Fabrication_Shop_Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Fabrication_Shop_Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Fabrication_Shop_Art_Museums_Desktop.jpg" alt="Fabrication Shop">
                        </picture>
                        <figcaption>Fabrication Shop</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Entrance_Gallery,_Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Entrance_Gallery,_Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Entrance_Gallery,_Art_Museums_Desktop.jpg" alt="Entrance Gallery">
                        </picture>
                        <figcaption>Entrance gallery</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Collected_Arts_Portrait_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Collected_Arts_Portrait_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Collected_Arts_Portrait_Desktop.jpg" alt="Collecetd Arts Portrait">
                        </picture>
                        <figcaption>Collection of arts portrait</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Gallery_and_Cafe_Beyond_Art_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Gallery_and_Cafe_Beyond_Art_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Gallery_and_Cafe_Beyond_Art_Desktop.jpg" alt="Gallery and cafe beyond">
                        </picture>
                        <figcaption>Gallery and cafe beyond</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Mount_Shop_Art_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Mount_Shop_Art_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Mount_Shop_Art_Desktop.jpg" alt="Mount Shop">
                        </picture>
                        <figcaption>Mount shop</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Museum_Store_and_Interior_Arcade_Art_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Museum_Store_and_Interior_Arcade_Art_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Museum_Store_and_Interior_Arcade_Art_Desktop.jpg" alt="Museum store">
                        </picture>
                        <figcaption>Museum store</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Williamsburg’s Museums"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.3567891235684!2d-76.70634512428206!3d37.2719565720849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08e157b5b6db3%3A0xe4f2d7eb8f2b7f57!2sArt%20Museums%20of%20Colonial%20Williamsburg!5e0!3m2!1sen!2sus!4v1700000000007" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Expand Knowledge</h2>
                <p>Part of the Colonial Williamsburg Foundation’s extensive architectural collection, these elements serve as vital research tools. They have contributed to projects such as the reconstruction of Charlton’s Coffeehouse and the Public Armoury, while also influencing historical accuracy in paint colors throughout the Historic Area.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/rCwjvPymZL4" 
                    title="Architectural Clues to 18th-Century Williamsburg" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="AbbyMuseum" class="attraction-detail odd">
            <h2>Abby Aldrich Rockefeller Folk Art Museum</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Abby_Aldrich_Rockefeller_Folk_Art_Museum_Wiki_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Abby_Aldrich_Rockefeller_Folk_Art_Museum_Wiki_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Abby_Aldrich_Rockefeller_Folk_Art_Museum_Wiki_Desktop.jpg" alt="Abby Aldrich Rockefeller Folk Art Museum">
                </picture>
                <div class="text-content"> 
                    
                    <p>Discover paintings, sculptures, and crafts by self-taught artists at the Folk Art Museum, showcasing American ingenuity, culture, and early life through extraordinary exhibits and collections.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> 301 S Nassau St, Williamsburg, VA 23185</p>
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
                            <source srcset="assets/images/Jewelry_of_the_Santo_Domingo_Pueblo_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Jewelry_of_the_Santo_Domingo_Pueblo_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Jewelry_of_the_Santo_Domingo_Pueblo_Desktop.jpg" alt="Jewelry of the Santo Domingo Pueblo">
                        </picture>
                        <figcaption>Jewelry of the Santo Domingo Pueblo</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Textile_Gallery_Art_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Textile_Gallery_Art_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Textile_Gallery_Art_Desktop.jpg" alt="Textile Gallery">
                        </picture>
                        <figcaption>Textile Gallery</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/German_Toy_Art_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/German_Toy_Art_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/German_Toy_Art_Desktop.jpg" alt="German toy">
                        </picture>
                        <figcaption>German toy</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Collection_Status_art_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Collection_Status_art_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Collection_Status_art_Desktop.jpg" alt="Collection status">
                        </picture>
                        <figcaption>Collection status</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Carousels_Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Carousels_Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Carousels_Art_Museums_Desktop.jpg" alt="Carousels Animal">
                        </picture>
                        <figcaption>Carousels</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Exhibits_Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Exhibits_Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Exhibits_Art_Museums_Desktop.jpg" alt="Exhibits">
                        </picture>
                        <figcaption>Exhibits art</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Abby Aldrich Rockefeller Folk Art Museum" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.3567891235684!2d-76.70634512428206!3d37.2719565720849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08e157b5b6db3%3A0xe4f2d7eb8f2b7f57!2sArt%20Museums%20of%20Colonial%20Williamsburg!5e0!3m2!1sen!2sus!4v1700000000007" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Expand Knowledge</h2>
                <p>Part of the Colonial Williamsburg Foundation’s extensive architectural collection, these elements serve as vital research tools. They have contributed to projects such as the reconstruction of Charlton’s Coffeehouse and the Public Armoury, while also influencing historical accuracy in paint colors throughout the Historic Area.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/YtIk0WgFkzk" 
                    title="Abby Aldrich Rockefeller Art Museum - 60th Anniversary" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="JamestownMuseums" class="attraction-detail odd">
            <h2>Jamestown Settlement Museum</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Jamestown_Museums_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Jamestown_Museums_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Jamestown_Museums_Desktop.jpg" alt="Textile Gallery">
                </picture>
                <div class="text-content">
                    
                    <p>Experience 17th-century Virginia at Jamestown Settlement, where immersive films, exhibits, and outdoor re-creations bring America's early history to life.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> 2110 Jamestown Rd, Williamsburg, VA 23185</p>
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
                            <source srcset="assets/images/Jewelry_of_the_Santo_Domingo_Pueblo_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Jewelry_of_the_Santo_Domingo_Pueblo_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Jewelry_of_the_Santo_Domingo_Pueblo_Desktop.jpg" alt="Jewelry of the Santo Domingo Pueblo">
                        </picture>
                        <figcaption>Jewelry of the Santo Domingo Pueblo</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/jamestown_settlement_ships_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/jamestown_settlement_ships_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/jamestown_settlement_ships_Desktop.jpg" alt="Jamestown settlement ship">
                        </picture>
                        <figcaption>Jamestown settlement ship</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/jamestown_settlement_swivel_gun_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/jamestown_settlement_swivel_gun_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/jamestown_settlement_swivel_gun_Desktop.jpg" alt="Swivel gun">
                        </picture>
                        <figcaption>Swivel gun</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/jamestown_settlement_ship_canon_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/jamestown_settlement_ship_canon_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/jamestown_settlement_ship_canon_Desktop.jpg" alt="Ship canon">
                        </picture>
                        <figcaption>Ship canon</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Exhbit_Jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Exhbit_Jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Exhbit_Jamestown_Desktop.jpg" alt="Exhbit Jamestown">
                        </picture>
                        <figcaption>Exhbit Jamestown</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Botanist_Jamestown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Botanist_Jamestown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Botanist_Jamestown_Desktop.jpg" alt="Botanist">
                        </picture>
                        <figcaption>Botanist</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Jamestown Settlement Museum" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.026327769036!2d-76.77855692428054!3d37.22556397209554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b089470eec295f%3A0x6a2c65e0dfc6ebf6!2sJamestown%20Settlement!5e0!3m2!1sen!2sus!4v1700000000001" 
                    width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Discover Jamestown Settlement</h2>
                <p>Take a journey through history with this insightful video about Jamestown Settlement. Learn about the struggles, triumphs, and daily life of early settlers in the first permanent English colony in America.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/wm47o9zgYhs" 
                    title="Jamestown Settlement - A Historical Journey" 
                   
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="AmericanRevolution" class="attraction-detail odd">
            <h2>American Revolution Museum at Yorktown</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/American_Revolution_Museum_Yorktown_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/American_Revolution_Museum_Yorktown_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/American_Revolution_Museum_Yorktown_Desktop.jpg" alt="Jewelry of the Santo Domingo Pueblo">
                </picture>
                <div class="text-content">
                    
                    <p>Explore the American Revolution Museum at Yorktown, where immersive exhibits, films, and living-history re-creations bring the Revolutionary War era to life.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> 200 Water St, Yorktown, VA 23690</p>
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
                            <source srcset="assets/images/George_Washington_statue_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/George_Washington_statue_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/George_Washington_statue_Desktop.jpg" alt="George Washingaton Statue">
                        </picture>
                        <figcaption>George Washingaton Statue</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Siege_of_Yorktown_Theater_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Siege_of_Yorktown_Theater_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Siege_of_Yorktown_Theater_Desktop.jpg" alt="Siege of Yorktown Theater">
                        </picture>
                        <figcaption>Siege of Yorktown Theater</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Cannon_outside_Siege_of_Yorktown_theater_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Cannon_outside_Siege_of_Yorktown_theater_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Cannon_outside_Siege_of_Yorktown_theater_Desktop.jpg" alt="Cannon outside siege of Yorktown">
                        </picture>
                        <figcaption>Cannon outside siege of Yorktown</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Battle_of_Great_Bridge_diorama_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Battle_of_Great_Bridge_diorama_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Battle_of_Great_Bridge_diorama_Desktop.jpg" alt="Battle of great bridge diorama">
                        </picture>
                        <figcaption>Battle of great bridge diorama</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Entrance_Yorktown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Entrance_Yorktown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Entrance_Yorktown_Desktop.jpg" alt="Entrance">
                        </picture>
                        <figcaption>Entrance</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Exhbit_Yorktown_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Exhbit_Yorktown_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Exhbit_Yorktown_Desktop.jpg" alt="Exhibit Yorktown">
                        </picture>
                        <figcaption>Exhbit yorktown</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Yorktown Museums" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.654938467389!2d-76.50873752427912!3d37.23648247209315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08f6b68f18b6d%3A0x79e45620cb9f6c8!2sAmerican%20Revolution%20Museum%20at%20Yorktown!5e0!3m2!1sen!2sus!4v1700000000002"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Discover the American Revolution Museum</h2>
                <p>Learn about the stories of citizens and soldiers of the American Revolution at the American Revolution Museum at Yorktown. This video takes you through interactive exhibits, a Continental Army encampment, and a Revolution-era farm that provide a deeper understanding of this pivotal moment in history.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/nkkHpzCnugo"  
                    title="American Revolution Museum at Yorktown - A Journey Through History"
                     
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>
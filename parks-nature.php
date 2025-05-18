<?php
    $pageTitle = "Parks Nature"; 
    require_once('assets/inc/header.inc.php');
?>

 <!-- Hero Section with Full-Screen Video -->
 <section class="hero-section">
        <div class="hero-overlay">
            <h1>Explore Parks & Nature in Williamsburg, VA</h1>
            <p><i>Discover the natural beauty and outdoor adventures that Williamsburg has to offer.</i></p>
        </div>
        <img src="assets/images/York_river.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="attractions.php">Attractions</a> &gt;
        <span>Park Nature</span>
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
            <h1>Welcome to Williamsburg's Parks & Nature</h1>
            <p><i>Experience the serene beauty of Williamsburg's parks, where history and nature blend seamlessly. Whether you're looking for scenic trails, wildlife encounters, or peaceful picnic spots, these parks provide the perfect escape. Explore lush forests, tranquil waterways, and historic landscapes that offer outdoor adventures for visitors of all ages.</i></p>
        </section>

        <article id="YorkRiver" class="attraction-detail odd">
            <h2>York River State Park</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Entrance_York_Park_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Entrance_York_Park_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Entrance_York_Park_Desktop.jpg" alt="Entracne york park">
                </picture>
                <div class="text-content">
                    
                    <p>York River State Park offers scenic trails, wildlife viewing, and water activities along the York River.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> 9801 York River Park Rd, Williamsburg, VA 23188</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Entrance_York_Park_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Entrance_York_Park_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Entrance_York_Park_Desktop.jpg" alt="Entracne york park">
                        </picture>
                        <figcaption>Entracne york park</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/York_River_-_Taskinas_Creek_CHild_Play_Area_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/York_River_-_Taskinas_Creek_CHild_Play_Area_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/York_River_-_Taskinas_Creek_CHild_Play_Area_Desktop.jpg" alt="Child playground">
                        </picture>
                        <figcaption>Child playground</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/YR_Views_of_York_River_State_Park_Wooden_Seat_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/YR_Views_of_York_River_State_Park_Wooden_Seat_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/YR_Views_of_York_River_State_Park_Wooden_Seat_Desktop.jpg" alt="Wooden seat">
                        </picture>
                        <figcaption>Wooden seat</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/YR_York_River_State_Park_Beach_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/YR_York_River_State_Park_Beach_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/YR_York_River_State_Park_Beach_Desktop.jpg" alt="Beach">
                        </picture>
                        <figcaption>Beach York</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/YR_Winter_At_York_River_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/YR_Winter_At_York_River_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/YR_Winter_At_York_River_Desktop.jpg" alt="Winter at York">
                        </picture>
                        <figcaption>Winter at york</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/YR_York_River_State_Park_Walk_Trail_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/YR_York_River_State_Park_Walk_Trail_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/YR_York_River_State_Park_Walk_Trail_Desktop.jpg" alt="Walk trail">
                        </picture>
                        <figcaption>Walk trail</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of York River State Park" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.9506988857866!2d-76.71613432494706!3d37.41464017207827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b091eb1fb6b9e5%3A0x9b4b591f973da31!2s9801%20York%20River%20Park%20Rd%2C%20Williamsburg%2C%20VA%2023188!5e0!3m2!1sen!2sus!4v1741143998721!5m2!1sen!2sus" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Explore York River State Park – A Scenic Adventure Near Williamsburg, VA!</h2>
                <p>York River State Park near Williamsburg, VA, offers scenic hiking, mountain biking, wildlife viewing, kayaking, and family-friendly outdoor adventures with beautiful trails</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/nc5d6a7AFVE" 
                    title="Cycle trial at york state park" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="ColonialPark" class="attraction-detail odd">
            <h2>Colonial National Historical Park</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Colonial_Parkway_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Colonial_Parkway_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Colonial_Parkway_Desktop.jpg" alt="Colonial Parkway">
                </picture>
                <div class="text-content">
                    
                    <p>Experience the rich history and natural beauty of Colonial National Historical Park, which includes Jamestown and Yorktown.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> Colonial Pkwy, Yorktown, VA 23690</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Entrance_Colonial_Parkway_in_Williamsburg,_Virginia_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Entrance_Colonial_Parkway_in_Williamsburg,_Virginia_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Entrance_Colonial_Parkway_in_Williamsburg,_Virginia_Desktop.jpg" alt="Entracne Colonial Parkway">
                        </picture>
                        <figcaption>Entracne Colonial Parkway</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Colonial_Parkway_Bird_on_a_Rustic_Fence_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Colonial_Parkway_Bird_on_a_Rustic_Fence_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Colonial_Parkway_Bird_on_a_Rustic_Fence_Desktop.jpg" alt="Bird on a rustic fence">
                        </picture>
                        <figcaption>Bird on a rustic fence</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Colonial_Parkway_Bridge_Over_Creek_in_Williamsburg_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Colonial_Parkway_Bridge_Over_Creek_in_Williamsburg_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Colonial_Parkway_Bridge_Over_Creek_in_Williamsburg_Desktop.jpg" alt="Bridge over creek">
                        </picture>
                        <figcaption>Bridge over creek</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Colonial_Parkway_White_Windmill_in_Williamsburg_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Colonial_Parkway_White_Windmill_in_Williamsburg_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Colonial_Parkway_White_Windmill_in_Williamsburg_Desktop.jpg" alt="White Windmill">
                        </picture>
                        <figcaption>White windmill</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Colonial_Parkway_in_Williamsburg_Northbound_Road_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Colonial_Parkway_in_Williamsburg_Northbound_Road_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Colonial_Parkway_in_Williamsburg_Northbound_Road_Desktop.jpg" alt="Northbound road">
                        </picture>
                        <figcaption>Northbound road</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Farm,_Colonial_Parkway_Near_Jamestown,_Virginia_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Farm,_Colonial_Parkway_Near_Jamestown,_Virginia_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Farm,_Colonial_Parkway_Near_Jamestown,_Virginia_Desktop.jpg" alt="Farm">
                        </picture>
                        <figcaption>Farm</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Colonial National Historical Park" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.7289967271395!2d-76.66532092495491!3d37.27785297211486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08876dc6a78e7%3A0x76fa7b14a14edbb1!2sColonial%20Nat&#39;l%20Historical%20Pkwy%2C%20Virginia!5e0!3m2!1sen!2sus!4v1741144057818!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Scenic Drive on Colonial Parkway – Williamsburg to Jamestown</h2>
                <p>Enjoy a peaceful virtual drive along Colonial Parkway, linking Williamsburg, Jamestown, and Yorktown, showcasing history, nature, and stunning landscapes.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/DsbcN_yG1eo" 
                    title="Colonial Parkway" 
            
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="WallerPark" class="attraction-detail odd">
            <h2>Waller Mill Park</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Boat_Waller_mill_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Boat_Waller_mill_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Boat_Waller_mill_Desktop.jpg" alt="Boat Park waller">
                </picture>
                <div class="text-content">
                    
                    <p>Waller Mill Park is a great spot for hiking, fishing, kayaking, and picnicking, surrounded by a beautiful reservoir.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong> 901 Airport Rd, Williamsburg, VA 23185</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Entrance_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Entrance_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Entrance_Waller_Desktop.jpg" alt="Entracne waller">
                        </picture>
                        <figcaption>Entrance Waller</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/bridge_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/bridge_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/bridge_Waller_Desktop.jpg" alt="Bridge walk trail">
                        </picture>
                        <figcaption>Bridge walk trail</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Lake_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Lake_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Lake_Waller_Desktop.jpg" alt="Waller Lake">
                        </picture>
                        <figcaption>Waller lake</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Boat_Park_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Boat_Park_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Boat_Park_Waller_Desktop.jpg" alt="Boat port">
                        </picture>
                        <figcaption>Boat stand</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Walk_Trail_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Walk_Trail_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Walk_Trail_Waller_Desktop.jpg" alt="Walk trail">
                        </picture>
                        <figcaption>Walk trail</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bridge_Boat_Port_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bridge_Boat_Port_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bridge_Boat_Port_Waller_Desktop.jpg" alt="Farm">
                        </picture>
                        <figcaption>Boat port</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Waller Mill Park" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12692.98657195282!2d-76.71177905139074!3d37.312984953681344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08ecdad9495b9%3A0x70a6e151d40594ab!2s901%20Airport%20Rd%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1741144114684!5m2!1sen!2sus"  
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Hiking Waller Mill Park Lookout Tower Trail – A Scenic Adventure in Williamsburg, VA</h2>
                <p>Explore Waller Mill Park’s Lookout Tower Trail in Williamsburg, VA, featuring stunning lake views, challenging paths, and unforgettable hiking experiences.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/qJFJ4S-fI4E" 
                    title="Waller Mill Park" 
                  
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id ="FreedomPark" class="attraction-detail odd">
            <h2>Freedom Park</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Freedom_Park_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Freedom_Park_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Freedom_Park_Desktop.jpg" alt="Freedom park">
                </picture>
                <div class="text-content">
                    
                    <p>Freedom Park offers biking trails, historical sites, and a lush forested area, providing a unique blend of nature and history.</p>
                    <p><strong>Visitor Time:</strong> 9 AM to 5 PM</p>
                    <p><strong>Location:</strong>  5537 Centerville Rd, Williamsburg, VA 23188</p>
                    <a href="./ticket.php" class="ticket-button">Ticket Now</a>
                </div>
            </div>
            <section class="gallery-container">
                <h2>Gallery</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Entrance_Freedom_Park_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Entrance_Freedom_Park_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Entrance_Freedom_Park_Desktop.jpg" alt="Entracne Freedom Park">
                        </picture>
                        <figcaption>Entrance Freedom park</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bridge_Trail_Freedom_Park_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bridge_Trail_Freedom_Park_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bridge_Trail_Freedom_Park_Desktop.jpg" alt="Bridge trail freedom park">
                        </picture>
                        <figcaption>Bridge trail</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bike_Trail_Freedom_Park_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bike_Trail_Freedom_Park_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bike_Trail_Freedom_Park_Desktop.jpg" alt="Bike trail freedom park">
                        </picture>
                        <figcaption>Bike trail</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Freedom_Park_Museum_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Freedom_Park_Museum_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Freedom_Park_Museum_Desktop.jpg" alt="Museum">
                        </picture>
                        <figcaption>Museum</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Walk_Trail_Freedom_park_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Walk_Trail_Freedom_park_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Walk_Trail_Freedom_park_Desktop.jpg" alt="Walk trail">
                        </picture>
                        <figcaption>Walk trail</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bridge_Boat_Port_Waller_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bridge_Boat_Port_Waller_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Botanical_Garden_Freedom_Park_Desktop.jpg" alt="Botonical garden">
                        </picture>
                        <figcaption>Botonical garden</figcaption>
                    </figure>
                </div>
            </section>
        
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Freedom Park" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12691.070052238223!2d-76.8126072513803!3d37.32433435363277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08ca007101885%3A0x84ce1e9c5872e20b!2s5537%20Centerville%20Rd%2C%20Williamsburg%2C%20VA%2023188!5e0!3m2!1sen!2sus!4v1741144169330!5m2!1sen!2sus" 
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>

                
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>Exploring Williamsburg, VA – Best Flowing Singletrack Trails</h2>
                <p>Experience Williamsburg, VA’s best flowing singletrack trails, expertly designed for smooth riding, scenic views, and an exciting outdoor adventure.</p>
                
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/r5h9Z0NZ2Bk"  
                    title="Freedom Park"
                   
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>
<?php require_once('assets/inc/footer.inc.php'); ?>

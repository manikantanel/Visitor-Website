<?php
$pageTitle = "Walking Tours"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Walking Tour: Discover Your City's Stories</h1>
            <p>Step into history with us</p>
        </div>
        <img src="assets/images/leather-works.webp" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="guided-tours.php">Guided Tour</a> &gt;
        <span>Walking Tour</span>
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
            <h1>Walking Tours</h1>
            <p><i>Join guided walking tours through Williamsburg’s historic streets, where you’ll learn about life during the colonial era and see iconic landmarks up close.</i></p>
        </section>

        <article id="WalkingTour" class="attraction-detail odd">
            <h2>Colonial Life Walking Tour</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Walking_tour_colonial_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Walking_tour_colonial_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Walking_tour_colonial_Desktop.jpg" alt="Walking tour">
                </picture>
                <div class="text-content">
                    
                    <p>Walk through the heart of colonial history with knowledgeable guides sharing stories of revolution and daily life.</p>
                    <p><strong>Duration:</strong> 2 hours</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                    </div>
                </div>
            </div>
            
            <div class="gallery-container">
                <h2>Highlights</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Governor_Palace_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Governor_Palace_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Governor_Palace_Desktop.jpg" alt="Governor’s Palace">
                        </picture>
                        <figcaption>Governor’s Palace</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/capitol_colonial_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/capitol_colonial_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/capitol_colonial_desktop.jpg" alt="Colonial Capitol">
                        </picture>
                        <figcaption>Colonial Capitol</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Bruton_Church,_Williamsburg_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Bruton_Church,_Williamsburg_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Bruton_Church,_Williamsburg_Desktop.jpg" alt="Bruton Parish Church">
                        </picture>
                        <figcaption>Bruton Parish Church</figcaption>
                    </figure>
                </div>
            </div>    
            
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Colonial Life Walking Tour"
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d3174.9334735884213!2d-76.71052357359805!3d37.27300462211616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e2!4m5!1s0x89b0897378070919%3A0xfe845a4a738c0cb4!2sColonial%20Capital%20Bed%20%26%20Breakfast%2C%20501%20Richmond%20Rd%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2748953!2d-76.7135273!4m5!1s0x89b0890ede476d21%3A0x20f58a903c314b9c!2sGovernor&#39;s%20Palace%2C%20300%20Palace%20Green%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.274024499999996!2d-76.7021539!4m5!1s0x89b08909148c2c23%3A0x265c9fd2991a240a!2sBruton%20Parish%20Episcopal%20Church%2C%20201%20W%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.271366199999996!2d-76.7025553!5e0!3m2!1sen!2sus!4v1740025521097!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
              
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Exploring Colonial Williamsburg</h2>
                <p>
                    Step back in time and explore daily life in Colonial Williamsburg, witnessing historic buildings, skilled craftsmen, and engaging reenactments of 18th-century Virginia.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/09qiQO-R1-4"
                    title="YouTube video player" 
                  
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="Haunted" class="attraction-detail odd">
            <h2>Ghosts of Williamsburg Night Tour</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/haunted_williamsburg_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/haunted_williamsburg_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/haunted_williamsburg_Desktop.jpg" alt="Haunted Williamsburg">
                </picture>
                <div class="text-content">
                    
                    <p>
                        Join Haunted Williamsburg for a ghost tour inside historic buildings. Hear eerie tales by candlelight. Suitable for ages 8+. No pets allowed.
                    </p>
                        
                    <p><strong>Duration:</strong> 90 minutes</p>
                    
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                     
                    </div>
                </div>
            </div>
            
            <div class="gallery-container">
                <h2>Highlights</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Brickhouse_Tavern_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Brickhouse_Tavern_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Brickhouse_Tavern_Desktop.jpg" alt="Brick House">
                        </picture>
                        <figcaption>Brick house Tavern</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Tavren_House_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Tavren_House_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Tavren_House_Desktop.jpg" alt="Raleigh Tavern">
                        </picture>
                        <figcaption>Raleigh Tavern</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/capitol_colonial_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/capitol_colonial_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/capitol_colonial_desktop.jpg" alt="Colonial Capitol">
                        </picture>
                        <figcaption>Colonial Capitol</figcaption>
                    </figure>
                </div>
            </div>    
            
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Ghosts of Williamsburg Night Tour"
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d3174.9985335699516!2d-76.69770267495522!3d37.27146187211657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e2!4m5!1s0x89b08906684f3d23%3A0xb06519d4feef4489!2s300398%20E%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.271220299999996!2d-76.6969957!4m5!1s0x89b0890bb043abf5%3A0x60bb7714a151cae9!2sRaleigh%20Tavern!3m2!1d37.2717035!2d-76.69558909999999!4m5!1s0x89b08906acc75313%3A0x6c24a0f3fffcf54c!2sCapitol%2C%20W%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2716541!2d-76.6932947!5e0!3m2!1sen!2sus!4v1740191256049!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
               
            </div>
        </article>
        <div class="content-container">
            <div class="text-content">
                <h2>A Spine-Chilling Lesson in Obedience</h2>
                <p>Defying your parents can have unsettling consequences, but in this Haunted Williamsburg tale, the outcome is truly terrifying. Step into the eerie past as you uncover a ghostly story that will send shivers down your spine. Prepare for a haunting experience where disobedience leads to a fate you won’t forget.</p>
            </div>
            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/E1wpOqDqZ0M" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="Revolutionary" class="attraction-detail odd">
            <h2>Revolutionary Williamsburg Tour</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Rev_Chesapeake_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Rev_Chesapeake_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Rev_Chesapeake_Desktop.jpg" alt="Chesapeake">
                </picture>
                <div class="text-content">
                    
                    <p>
                        Step into the Revolutionary era and explore key sites where American independence was forged, guided by expert historians.
                    </p>
                    <p><strong>Duration:</strong> 2 hours 30 minutes</p>
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                       
                    </div>
                </div>
            </div>

            
            <div class="gallery-container">
                <h2>Highlights</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/Tavren_House_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Tavren_House_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Tavren_House_Desktop.jpg" alt="Raleigh Tavern">
                        </picture>
                        <figcaption>Raleigh Tavern</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Powder_magazine_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Powder_magazine_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Powder_magazine_desktop.jpg" alt="Powder magazine">
                        </picture>
                        <figcaption>Powder Magazine</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/carving_wood_on_knee_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/carving_wood_on_knee_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/carving_wood_on_knee_Desktop.jpg" alt="Historic Tradesmen">
                        </picture>
                        <figcaption>Historic Tradesmen</figcaption>
                    </figure>
                </div>
            </div>    
            
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Revolutionary Williamsburg Tour" 
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d3174.986949245171!2d-76.70043337495524!3d37.27173657211647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e2!4m5!1s0x89b089088e3edab1%3A0x65923888c22c6083!2s103%20E%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.270727699999995!2d-76.69999!4m5!1s0x89b08979f73f9433%3A0xc7da0d7dfe184a82!2sCarpenter&#39;s%20Yard%2C%20401%20E%20Nicholson%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.272722699999996!2d-76.6962748!4m5!1s0x89b0890bb043abf5%3A0x60bb7714a151cae9!2sRaleigh%20Tavern%2C%20East%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.2717035!2d-76.69558909999999!5e0!3m2!1sen!2sus!4v1740195083575!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
                
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Crafting Timeless Traditions</h2>
                <p>Historic Williamsburg carpentry thrived as craftsmen transformed trees into lumber, built timber frames, and finished structures with siding and roofing.</p>
            </div>
            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/D0NVuxtbv_U?start=130" 
                    title="YouTube video player" 
                     
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="Artisans" class="attraction-detail odd">
            <h2>Artisans & Trades Tour</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/leather_works_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/leather_works_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/leather_works_Desktop.jpg" alt="Leather work">
                </picture>
                <div class="text-content">
                    
                    <p>
                        Witness skilled artisans at work, crafting goods using 18th-century techniques in Williamsburg’s historic trade shops and workshops.
                    </p>
                    <p><strong>Duration:</strong> 1 hour 30 minutes</p>
                    
                    <a href="registration.php" class="ticket-button">Register Now</a>
                    <div class="detail-information">
                        <img src="assets/images/ticket_large.png" alt="Admission Icon">Admission
                      
                    </div>
                </div>
            </div>
            
            <div class="gallery-container">
                <h2>Highlights</h2>
                <div class="gallery-grid">
                    <figure>
                        <picture>
                            <source srcset="assets/images/double_striking_sparks_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/double_striking_sparks_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/double_striking_sparks_Desktop.jpg" alt="Blacksmith Forge">
                        </picture>
                        <figcaption>Blacksmith Forge</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Print_Shop_Williamsburg_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Print_Shop_Williamsburg_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Print_Shop_Williamsburg_Desktop.jpg" alt="Colonial Print Shop">
                        </picture>
                        <figcaption>Colonial Print Shop</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/weaver_making_cloth_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/weaver_making_cloth_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/weaver_making_cloth_Desktop.jpg" alt="Weaving House">
                        </picture>
                        <figcaption>Weaving House</figcaption>
                    </figure>
                </div>
            </div>    
            
            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Artisans & Trades Tour" 
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d12699.73653308812!2d-76.71980239503935!3d37.27298897948851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x89b08906acc75313%3A0x6c24a0f3fffcf54c!2sCapitol%20Building%2C%20West%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.2716541!2d-76.6932947!4m5!1s0x89b0890efb7625a1%3A0x21d24e23598f3e56!2sPalace%20Gardens%2C%20300%20Palace%20Green%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.275167499999995!2d-76.70232419999999!4m5!1s0x89b08909f8f41529%3A0xd3601e5cbf3fb28d!2sThe%20Art%20Museums%20of%20Colonial%20Williamsburg%2C%20301%20S%20Nassau%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2685774!2d-76.7055007!5e0!3m2!1sen!2sus!4v1740203327520!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Journeyman Joe and Apprentice Pamela</h2>
                <p>During the American Revolution, master and apprentice weavers innovatively contributed textiles essential for military uniforms, powerfully supporting the revolutionary cause.</p>
            </div>
            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/Vtz2Y8h5eLY?start=2" 
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>

    <?php require_once('assets/inc/footer.inc.php'); ?>
<?php
$pageTitle = "Carriages Rides"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Colonial Carriage Rides Tour</h1>
            <p>Savor colonial charm on wheels.</p>
        </div>
        <img src="assets/images/Carriage_Rides_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <a href="guided-tours.php">Guided Tour</a> &gt;
        <span>Carriage Rides</span>
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
            <h1>Carriage Rides</h1>
            <p><i>Relax and take in the sights of colonial Williamsburg from the comfort of a horse-drawn carriage.</i></p>
        </section>

        <article id="CarriageRides" class="attraction-detail odd">
            <h2>Historic Carriage Ride</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/Carriage_Rides_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/Carriage_Rides_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/Carriage_Rides_Desktop.jpg" alt="Carriage rides">
                </picture>
                <div class="text-content">
                    
                    <p>Enjoy a peaceful ride through the historic district with commentary from your carriage driver.</p>
                    <p><strong>Duration:</strong> 45 minutes</p>
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
                            <source srcset="assets/images/Duke_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Duke_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Duke_Desktop.jpg" alt="Duke of Gloucester Street">
                        </picture>
                        <figcaption>Duke of Gloucester Street</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Sqaure_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Sqaure_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Sqaure_Desktop.jpg" alt="Merchant’s Square">
                        </picture>
                        <figcaption>Merchant’s Square</figcaption>
                    </figure>
                </div>
            </div>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Historic Carriage Ride"
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d3174.952522663985!2d-76.70547922495516!3d37.27255292211625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x89b0890ede476d21%3A0x20f58a903c314b9c!2sGovernor&#39;s%20Palace%2C%20Palace%20Green%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.274024499999996!2d-76.7021539!4m5!1s0x89b0890972c04843%3A0x6727073cd122c3f1!2sW%20Duke%20of%20Gloucester%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2710618!2d-76.7037703!4m5!1s0x89b08908e2f8e749%3A0x1185f1a95e872fc8!2sMerchants%20Square%20and%20Resort%20Historic%20District%2C%20Williamsburg%2C%20VA!3m2!1d37.2711532!2d-76.70175189999999!5e0!3m2!1sen!2sus!4v1740198184294!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Discover Williamsburg Carriage Rides</h2>
                <p>
                    Step aboard an authentic horse-drawn carriage in Williamsburg, experiencing true colonial charm, historic streets, and timeless stories with every ride.
                </p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/nZh1mxFarHo" 
                    title="YouTube video player" 
                     
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="RomanticCarriage" class="attraction-detail odd">
            <h2>Romantic Evening Carriage Ride</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/romantic_wythe_carriage_couple_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/romantic_wythe_carriage_couple_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/romantic_wythe_carriage_couple_Desktop.jpg" alt="Romantic carriage rides">
                </picture>
                <div class="text-content">
                    
                    <p>Enjoy a peaceful ride through the historic district with commentary from your carriage driver.</p>
                    <p><strong>Duration:</strong> 45 minutes</p>
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
                            <source srcset="assets/images/Courthouse_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Courthouse_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Courthouse_Desktop.jpg" alt="Courthouse Green">
                        </picture>
                        <figcaption>Courthouse Green</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Williamsburg_Inn_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Williamsburg_Inn_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Williamsburg_Inn_Desktop.jpg" alt="Williamsburg Inn">
                        </picture>
                        <figcaption>Williamsburg Inn</figcaption>
                    </figure>
                </div>
            </div>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Romantic Evening Carriage Ride"
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d25398.537088992776!2d-76.74038264044644!3d37.27576316534074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x89b0890ede3e1d19%3A0x828b09d0bc3733b8!2s300%20Palace%20Green%20St%2C%20Williamsburg%2C%20VA!3m2!1d37.2742605!2d-76.7021429!4m5!1s0x89b08bd15cdae061%3A0x4339d07735d77dc5!2sCourthouse%20St%2C%20Williamsburg%2C%20VA%2023188!3m2!1d37.2785283!2d-76.741242!4m5!1s0x89b08907a493a39b%3A0x3185ecf3c6a42c13!2s136%20Francis%20Street%20East%2C%20Williamsburg%2C%20VA%2C%20United%20States!3m2!1d37.268904899999995!2d-76.6974386!5e0!3m2!1sen!2sus!4v1740199746881!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Travel Back in Time: Williamsburg Carriage Ride</h2>
                <p>Experience an enchanting carriage ride through Colonial Williamsburg’s historic streets, where open-air tours immerse you in 18th-century charm and adventure.</p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/SLadsAa4D0Y"
                    title="YouTube video player" 
                   
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="StageCoach" class="attraction-detail odd">
            <h2>Family Fun Carriage Adventure</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/stage_coach_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/stage_coach_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/stage_coach_Desktop.jpg" alt="family Carriage rides">
                </picture>
                <div class="text-content">
                    
                    <p>A perfect outing for families, this guided tour brings colonial history to life while kids enjoy the excitement of a horse-drawn ride.</p>
                    <p><strong>Duration:</strong> 40 minutes</p>
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
                    <figure>
                        <picture>
                            <source srcset="assets/images/Sqaure_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Sqaure_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Sqaure_Desktop.jpg" alt="Merchant’s Square">
                        </picture>
                        <figcaption>Merchant’s Square</figcaption>
                    </figure>
                </div>
            </div>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Family Fun Carriage Adventure"
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d10079.788121430638!2d-76.71980239503932!3d37.27298897948851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x89b08906acc75313%3A0x6c24a0f3fffcf54c!2sCapitol%20Building%2C%20West%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.2716541!2d-76.6932947!4m5!1s0x89b08909148c2c23%3A0x265c9fd2991a240a!2sBruton%20Parish%20Episcopal%20Church%2C%20West%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.271366199999996!2d-76.7025553!4m5!1s0x89b08908e2f8e749%3A0x1185f1a95e872fc8!2sMerchants%20Square%20and%20Resort%20Historic%20District%2C%20Williamsburg%2C%20VA!3m2!1d37.2711532!2d-76.70175189999999!5e0!3m2!1sen!2sus!4v1740202222795!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Capturing Life’s Daily Joys: Mom, Parenting, and Adventure</h2>
                <p>Join our journey capturing everyday parenting moments, crazy weather, Disney travels, creative DIYs, and organized life adventures that bring joy.</p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315" 
                    src="https://www.youtube.com/embed/Q6YXjk_mxKw"
                    title="YouTube video player" 
                   
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <article id="MadisonCarraige" class="attraction-detail odd">
            <h2>Blue Carriage Rides</h2>
            <div class="attraction-content-detail">
                <picture>
                    <source srcset="assets/images/madison_carriage_Desktop.jpg" media="(min-width: 800px)">
                    <source srcset="assets/images/madison_carriage_Mobile.jpg" media="(max-width: 799px)">
                    <img src="assets/images/madison_carriage_Desktop.jpg" alt="Blue carriage rides">
                </picture>
                <div class="text-content">
                    
                    <p>Experience blue carriage rides in Colonial Williamsburg, VA as expert guides unveil historic routes, charming landmarks, and create lasting memories.</p>
                    <p><strong>Duration:</strong> 45 minutes</p>
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
                            <source srcset="assets/images/capitol_colonial_desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/capitol_colonial_mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/capitol_colonial_desktop.jpg" alt="Colonial Capitol">
                        </picture>
                        <figcaption>Colonial Capitol</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Palace_park_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Palace_park_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Palace_park_Desktop.jpg" alt="Palace garden">
                        </picture>
                        <figcaption>Palace garden</figcaption>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="assets/images/Art_Museums_Desktop.jpg" media="(min-width: 800px)">
                            <source srcset="assets/images/Art_Museums_Mobile.jpg" media="(max-width: 799px)">
                            <img src="assets/images/Art_Museums_Desktop.jpg" alt="Art Museums">
                        </picture>
                        <figcaption>Art Museums</figcaption>
                    </figure>
                </div>
            </div>

            <div class="map-container fade-in ">
                <iframe class="gmap"
                title="Map of Blue Carriage Rides"
                src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d12699.73653308812!2d-76.71980239503935!3d37.27298897948851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x89b08906acc75313%3A0x6c24a0f3fffcf54c!2sCapitol%20Building%2C%20West%20Duke%20of%20Gloucester%20Street%2C%20Williamsburg%2C%20VA!3m2!1d37.2716541!2d-76.6932947!4m5!1s0x89b0890efb7625a1%3A0x21d24e23598f3e56!2sPalace%20Gardens%2C%20300%20Palace%20Green%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.275167499999995!2d-76.70232419999999!4m5!1s0x89b08909f8f41529%3A0xd3601e5cbf3fb28d!2sThe%20Art%20Museums%20of%20Colonial%20Williamsburg%2C%20301%20S%20Nassau%20St%2C%20Williamsburg%2C%20VA%2023185!3m2!1d37.2685774!2d-76.7055007!5e0!3m2!1sen!2sus!4v1740204181510!5m2!1sen!2sus"
                width="100" height="300" style="width: 100%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>

        <div class="content-container">
            <div class="text-content">
                <h2>Saddle Up for a Colonial Journey</h2>
                <p>Experience a unique blend of history and charm as blue carriages transport you through Williamsburg’s storied past with unforgettable grace.</p>
            </div>

            <div class="video-content">
                <iframe width="100" style="width: 100%;" height="315"
                    src="https://www.youtube.com/embed/8S2zf5QCJQ0"
                    title="YouTube video player" 
                    
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <?php require_once('assets/inc/comments.inc.php'); ?>
    </main>

<?php require_once('assets/inc/footer.inc.php'); ?>
// Change header background color on scroll
// window.addEventListener('scroll', function () {
//     const header = document.getElementById('main-header');
//     if (window.scrollY > 50) {
//         header.classList.add('scrolled');
//     } else {
//         header.classList.remove('scrolled');
//     }
// });

// // Main Image Slider (Full Width Header Slider)
// let currentSlideIndex = 0;
// const slides = document.querySelector('.slides');
// const totalSlides = document.querySelectorAll('.slide').length;

// // Set initial slide position for the main image slider
// updateSlidePosition();

// // Function to update the main image slider's position based on the currentSlideIndex
// function updateSlidePosition() {
//     slides.style.transform = `translateX(-${100 * currentSlideIndex}%)`;
// }

// // Right arrow for main image slider
// document.querySelector('.right-arrow').addEventListener('click', function () {
//     if (currentSlideIndex < totalSlides - 1) {
//         currentSlideIndex++; // Move to the next slide
//     } else {
//         currentSlideIndex = 0; // Loop back to the first slide
//     }
//     updateSlidePosition();
// });

// // Left arrow for main image slider
// document.querySelector('.left-arrow').addEventListener('click', function () {
//     if (currentSlideIndex > 0) {
//         currentSlideIndex--; // Move to the previous slide
//     } else {
//         currentSlideIndex = totalSlides - 1; // Loop to the last slide
//     }
//     updateSlidePosition();
// });

// // Featured Attractions Slider (3 Images Per Slide)
// let currentSlide = 0;
// let cardsPerView;
// let cardWidth;
// let maxAttractionsSlide;

// const totalAttractionsCards = document.querySelectorAll('.featured-attractions .card').length;
// const attractionsSlider = document.querySelector('.featured-attractions .slider');

// // Dynamically calculate cardsPerView, card width, and max slides
// function calculateDynamicSliderValues() {
//     // Dynamically set based on screen size
//     cardsPerView = window.innerWidth <= 480 ? 1 : window.innerWidth <= 768 ? 2 : 3;
//     cardWidth = document.querySelector('.card').offsetWidth + parseInt(window.getComputedStyle(document.querySelector('.card')).marginRight);
//     maxAttractionsSlide = Math.ceil(totalAttractionsCards / cardsPerView) - 1;
//     updateAttractionsSliderPosition(); // Recalculate slider position
// }

// // Initial setup
// calculateDynamicSliderValues();

// // Update slider position
// function updateAttractionsSliderPosition() {
//     attractionsSlider.style.transform = `translateX(-${currentSlide * cardWidth}px)`;
// }

// // Right arrow click
// document.getElementById('attractions-right-arrow').addEventListener('click', () => {
//     if (currentSlide < maxAttractionsSlide) {
//         currentSlide++;
//         updateAttractionsSliderPosition();
//     }
// });

// // Left arrow click
// document.getElementById('attractions-left-arrow').addEventListener('click', () => {
//     if (currentSlide > 0) {
//         currentSlide--;
//         updateAttractionsSliderPosition();
//     }
// });

// // Recalculate on window resize
// window.addEventListener('resize', () => {
//     calculateDynamicSliderValues();
//     currentSlide = 0; // Reset to prevent overflow
//     updateAttractionsSliderPosition();
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const slider = document.querySelector(".slides");
//     const slides = document.querySelectorAll(".slide");
//     let currentIndex = 0;
//     let startX = 0;
//     let endX = 0;

//     function updateSlidePosition() {
//         slider.style.transform = `translateX(-${currentIndex * 100}%)`;
//     }

//     // Detect touch start
//     slider.addEventListener("touchstart", (e) => {
//         startX = e.touches[0].clientX;
//     });

//     // Detect touch end and decide swipe direction
//     slider.addEventListener("touchend", (e) => {
//         endX = e.changedTouches[0].clientX;
//         let diff = startX - endX;

//         if (diff > 50 && currentIndex < slides.length - 1) {
//             // Swipe left → Move to next slide
//             currentIndex++;
//         } else if (diff < -50 && currentIndex > 0) {
//             // Swipe right → Move to previous slide
//             currentIndex--;
//         }
//         updateSlidePosition();
//     });
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const slider = document.querySelector(".slides-wrapper");

//     let isDown = false;
//     let startX;
//     let scrollLeft;

//     slider.addEventListener("mousedown", (e) => {
//         isDown = true;
//         startX = e.pageX - slider.offsetLeft;
//         scrollLeft = slider.scrollLeft;
//     });

//     slider.addEventListener("mouseleave", () => {
//         isDown = false;
//     });

//     slider.addEventListener("mouseup", () => {
//         isDown = false;
//     });

//     slider.addEventListener("mousemove", (e) => {
//         if (!isDown) return;
//         e.preventDefault();
//         const x = e.pageX - slider.offsetLeft;
//         const walk = (x - startX) * 3; // Increase sensitivity
//         slider.scrollLeft = scrollLeft - walk;
//     });

//     slider.addEventListener("touchstart", (e) => {
//         startX = e.touches[0].clientX;
//         scrollLeft = slider.scrollLeft;
//     });

//     slider.addEventListener("touchmove", (e) => {
//         const x = e.touches[0].clientX;
//         const walk = (x - startX) * 3; // Adjust speed
//         slider.scrollLeft = scrollLeft - walk;
//     });
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const slider = document.querySelector(".slider");
//     const cards = document.querySelectorAll(".card");
//     let currentIndex = 0;
//     let startX = 0;
//     let endX = 0;

//     function updateSlidePosition() {
//         let cardWidth = document.querySelector(".card").offsetWidth;
//         slider.style.transform = `translateX(-${currentIndex * (cardWidth + 10)}px)`;
//     }

//     // Only enable swipe on mobile screens
//     function enableSwipe() {
//         if (window.innerWidth < 1024) {
//             slider.addEventListener("touchstart", (e) => {
//                 startX = e.touches[0].clientX;
//             });

//             slider.addEventListener("touchend", (e) => {
//                 endX = e.changedTouches[0].clientX;
//                 let diff = startX - endX;

//                 if (diff > 50 && currentIndex < cards.length - 1) {
//                     currentIndex++;
//                 } else if (diff < -50 && currentIndex > 0) {
//                     currentIndex--;
//                 }
//                 updateSlidePosition();
//             });
//         }
//     }

//     // Check screen size on load and resize
//     enableSwipe();
//     window.addEventListener("resize", enableSwipe);
// });

document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const cards = document.querySelectorAll(".card");
    const prevBtn = document.getElementById("attractions-left-arrow");
    const nextBtn = document.getElementById("attractions-right-arrow");

    let currentIndex = 0;

    function getCardsPerRow() {
        if (window.innerWidth >= 1024) {
            return 3; // Desktop
        } else if (window.innerWidth >= 768) {
            return 2; // Tablet
        } else {
            return 1; // Mobile
        }
    }

    function updateSlidePosition() {
        let cardWidth = document.querySelector(".card").offsetWidth;
        let cardsPerRow = getCardsPerRow();

        slider.style.transition = "transform 0.5s ease-in-out";
        slider.style.transform = `translateX(-${currentIndex * (cardWidth * cardsPerRow)}px)`;
    }

    // Infinite Scrolling on Click
    function goToNextSlide() {
        let totalSlides = Math.ceil(cards.length / getCardsPerRow());

        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            // Loop back to first card
            currentIndex = 0;
        }
        updateSlidePosition();
    }

    function goToPreviousSlide() {
        let totalSlides = Math.ceil(cards.length / getCardsPerRow());

        if (currentIndex > 0) {
            currentIndex--;
        } else {
            // Loop back to last set of cards
            currentIndex = totalSlides - 1;
        }
        updateSlidePosition();
    }

    if (prevBtn && nextBtn) {
        nextBtn.addEventListener("click", goToNextSlide);
        prevBtn.addEventListener("click", goToPreviousSlide);
    }

    // Swipe Functionality for Mobile (Looping Enabled)
    let startX = 0;
    let endX = 0;

    slider.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
    });

    slider.addEventListener("touchend", (e) => {
        endX = e.changedTouches[0].clientX;
        let diff = startX - endX;

        if (diff > 50) {
            goToNextSlide();
        } else if (diff < -50) {
            goToPreviousSlide();
        }
    });

    window.addEventListener("resize", updateSlidePosition);
});

// //menu hamburger
// document.addEventListener("DOMContentLoaded", function () {
    
//     // Mobile Menu Toggle
//     const menuButton = document.querySelector(".hamburger");
//     const nav = document.getElementById("main-nav");

//     if (menuButton) {
//         menuButton.addEventListener("click", function () {
//             nav.classList.toggle("active");
//         });
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector(".hamburger");
    const nav = document.getElementById("main-nav");

    if (menuButton) {
        menuButton.addEventListener("click", function () {
            nav.classList.toggle("active");
            menuButton.classList.toggle("active");
        });
    }
});



// //search bar 
// document.addEventListener("DOMContentLoaded", function () {
//     console.log("Script loaded successfully");

//     /*** 🔹 SEARCH OVERLAY FUNCTIONALITY ***/
//     const searchButton = document.getElementById("search-button");
//     const searchOverlay = document.getElementById("search-overlay");
//     const closeSearch = document.getElementById("close-search");
//     const searchInput = document.getElementById("search-input");

//     if (searchButton && searchOverlay && closeSearch) {
//         searchButton.addEventListener("click", function () {
//             console.log("Search button clicked");
//             searchOverlay.style.display = "flex";
//             searchInput.focus();
//         });

//         closeSearch.addEventListener("click", function () {
//             console.log("Search overlay closed");
//             searchOverlay.style.display = "none";
//         });

//         document.addEventListener("keydown", function (event) {
//             if (event.key === "Escape") {
//                 searchOverlay.style.display = "none";
//             }
//         });
//     } else {
//         console.warn("Search button or overlay missing.");
//     }

//     /*** 🔹 MOBILE MENU FUNCTIONALITY ***/
//     const menuButton = document.querySelector(".hamburger");
//     const navMenu = document.getElementById("main-nav");

//     if (menuButton && navMenu) {
//         menuButton.addEventListener("click", function () {
//             console.log("Hamburger menu clicked");
//             navMenu.classList.toggle("active");
//         });
//     } else {
//         console.warn("Hamburger menu button or navigation menu missing.");
//     }
// });

    
document.addEventListener("DOMContentLoaded", function () {
    console.log("Script loaded successfully");

    /*** 🔹 HEADER SCROLL EFFECT (NEW FEATURE) ***/
    window.addEventListener("scroll", function () {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    /*** 🔹 SLIDER FUNCTIONALITY (FIXED) ***/
    const slides = document.querySelector('.slides');
    const slideElements = document.querySelectorAll('.slide');
    const rightArrow = document.querySelector('.right-arrow');
    const leftArrow = document.querySelector('.left-arrow');
    let currentSlideIndex = 0;

    function updateSlidePosition() {
        slides.style.transform = `translateX(-${100 * currentSlideIndex}%)`;
    }

    rightArrow.addEventListener('click', function () {
        if (currentSlideIndex < slideElements.length - 1) {
            currentSlideIndex++;
        } else {
            currentSlideIndex = 0;
        }
        updateSlidePosition();
    });

    leftArrow.addEventListener('click', function () {
        if (currentSlideIndex > 0) {
            currentSlideIndex--;
        } else {
            currentSlideIndex = slideElements.length - 1;
        }
        updateSlidePosition();
    });

    // ** Touch functionality for mobile swipe support **
    let touchStartX = 0;
    let touchEndX = 0;

    slides.addEventListener("touchstart", function (e) {
        touchStartX = e.touches[0].clientX;
    });

    slides.addEventListener("touchmove", function (e) {
        touchEndX = e.touches[0].clientX;
    });

    slides.addEventListener("touchend", function () {
        let swipeDistance = touchStartX - touchEndX;

        if (swipeDistance > 50) {
            // Swipe left (next slide)
            if (currentSlideIndex < slideElements.length - 1) {
                currentSlideIndex++;
            } else {
                currentSlideIndex = 0;
            }
        } else if (swipeDistance < -50) {
            // Swipe right (previous slide)
            if (currentSlideIndex > 0) {
                currentSlideIndex--;
            } else {
                currentSlideIndex = slideElements.length - 1;
            }
        }
        updateSlidePosition();
    });

    updateSlidePosition();

    /*** 🔹 SEARCH OVERLAY FUNCTIONALITY (FIXED) ***/
const searchButton = document.getElementById("search-button");
const searchOverlay = document.getElementById("search-overlay");
const closeSearch = document.getElementById("close-search");
const searchInput = document.getElementById("search-input");

if (searchButton && searchOverlay && closeSearch) {
    searchButton.addEventListener("click", function () {
        console.log("Search button clicked");
        searchOverlay.style.display = "flex";
        searchInput?.focus();
    });

    closeSearch.addEventListener("click", function () {
        console.log("Search overlay closed");
        searchOverlay.style.display = "none";
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            searchOverlay.style.display = "none";
        }
    });

    // Close search overlay when clicking outside the search input
    searchOverlay.addEventListener("click", function (event) {
        if (event.target === searchOverlay) {
            console.log("Clicked outside search input, closing overlay");
            searchOverlay.style.display = "none";
        }
    });
} else {
    console.warn("Search button or overlay missing.");
}

    // /*** 🔹 MOBILE MENU FUNCTIONALITY (FIXED) ***/
    // const menuButton = document.querySelector(".hamburger");
    // const navMenu = document.getElementById("main-nav");

    // if (menuButton && navMenu) {
    //     menuButton.addEventListener("click", function () {
    //         console.log("Hamburger menu clicked");
    //         navMenu.classList.toggle("active");

    //         // Ensure menu opens properly on mobile
    //         if (navMenu.classList.contains("active")) {
    //             navMenu.style.display = "block";
    //         } else {
    //             navMenu.style.display = "none";
    //         }
    //     });
    // } else {
    //     console.warn("Hamburger menu button or navigation menu missing.");
    // }

    /*** 🔹 MOBILE MENU FUNCTIONALITY (WITH ANIMATED CLOSE BUTTON) ***/
    // const menuButton = document.querySelector(".hamburger");
    // const navMenu = document.getElementById("main-nav");

    // if (menuButton && navMenu) {
    //     menuButton.addEventListener("click", function () {
    //         console.log("Hamburger menu clicked");
    //         navMenu.classList.toggle("active");
    //         menuButton.classList.toggle("open");

    //         // Ensure menu opens properly on mobile
    //         if (navMenu.classList.contains("active")) {
    //             navMenu.style.display = "block";
    //         } else {
    //             navMenu.style.display = "none";
    //         }
    //     });
    // } else {
    //     console.warn("Hamburger menu button or navigation menu missing.");
    // }
});

//back-to-top button 

document.addEventListener("DOMContentLoaded", function () {
    const backToTopButton = document.querySelector(".back-to-top");

    // Show/Hide the Back to Top button when scrolling
    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) { // Show button after scrolling 300px
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    });

    // Smooth Scroll to Top Function
    backToTopButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

// Function to open full-screen image Image viewer
// function openImage(src) {
//     const viewer = document.getElementById("image-viewer");
//     const viewerImg = document.getElementById("viewer-img");

//     viewer.style.display = "flex"; // Show the viewer
//     viewerImg.src = src; // Set clicked image as the source
// }

// // Function to close full-screen image
// function closeImage() {
//     document.getElementById("image-viewer").style.display = "none";
// }

// // Close image when clicking outside of the image
// document.getElementById("image-viewer").addEventListener("click", function(event) {
//     if (event.target === this) {
//         closeImage();
//     }
// });

// let currentImageIndex = 0;
// let galleryImages = [];

// document.addEventListener("DOMContentLoaded", function () {
//     const viewer = document.getElementById("image-viewer");
//     const viewerImg = document.getElementById("viewer-img");

//     // Ensure the image viewer is hidden when the page loads
//     if (viewer) {
//         viewer.style.display = "none";
//     }

//     // Select all images inside the gallery-grid
//     galleryImages = Array.from(document.querySelectorAll(".gallery-grid img"));

//     // Add click event listeners to all gallery images
//     galleryImages.forEach((img, index) => {
//         img.addEventListener("click", function () {
//             openImage(index);
//         });
//     });

//     // Close viewer when clicking outside of the image
//     viewer.addEventListener("click", function (event) {
//         if (event.target === viewer) {
//             closeImage();
//         }
//     });

//     // Left and Right arrow event listeners
//     document.getElementById("prev-btn").addEventListener("click", function () {
//         changeImage(-1);
//     });

//     document.getElementById("next-btn").addEventListener("click", function () {
//         changeImage(1);
//     });

//     // Keyboard navigation (Left/Right Arrow Keys)
//     document.addEventListener("keydown", function (event) {
//         if (viewer.style.display === "flex") {
//             if (event.key === "ArrowLeft") {
//                 changeImage(-1);
//             } else if (event.key === "ArrowRight") {
//                 changeImage(1);
//             } else if (event.key === "Escape") {
//                 closeImage();
//             }
//         }
//     });
// });

// // Function to open an image by index
// function openImage(index) {
//     const viewer = document.getElementById("image-viewer");
//     const viewerImg = document.getElementById("viewer-img");

//     currentImageIndex = index;

//     if (viewer && viewerImg) {
//         viewer.style.display = "flex";
//         viewerImg.src = galleryImages[currentImageIndex].src;
//     }
// }

// // Function to change image (next/prev)
// function changeImage(direction) {
//     currentImageIndex += direction;

//     if (currentImageIndex < 0) {
//         currentImageIndex = galleryImages.length - 1; // Loop back to last image
//     } else if (currentImageIndex >= galleryImages.length) {
//         currentImageIndex = 0; // Loop to first image
//     }

//     document.getElementById("viewer-img").src = galleryImages[currentImageIndex].src;
// }

// // Function to close the image viewer
// function closeImage() {
//     document.getElementById("image-viewer").style.display = "none";
// }

//Dulicapte
// let currentImageIndex = 0;
// let galleryImages = [];

// document.addEventListener("DOMContentLoaded", function () {
//     const viewer = document.getElementById("image-viewer");
//     const viewerImg = document.getElementById("viewer-img");
//     const viewerCaption = document.getElementById("viewer-caption");

//     if (viewer) {
//         viewer.style.display = "none";
//     }

//     galleryImages = Array.from(document.querySelectorAll(".gallery-grid img, .gallery-grid-section img"));
//     // galleryImages = Array.from(document.querySelectorAll(".gallery-grid-section img"));

//     galleryImages.forEach((img, index) => {
//         img.addEventListener("click", function () {
//             openImage(index);
//         });
//     });

//     viewer.addEventListener("click", function (event) {
//         if (event.target === viewer) {
//             closeImage();
//         }
//     });

//     document.getElementById("prev-btn").addEventListener("click", function () {
//         changeImage(-1);
//     });

//     document.getElementById("next-btn").addEventListener("click", function () {
//         changeImage(1);
//     });

//     document.addEventListener("keydown", function (event) {
//         if (viewer.style.display === "flex") {
//             if (event.key === "ArrowLeft") {
//                 changeImage(-1);
//             } else if (event.key === "ArrowRight") {
//                 changeImage(1);
//             } else if (event.key === "Escape") {
//                 closeImage();
//             }
//         }
//     });
// });

// function openImage(index) {
//     const viewer = document.getElementById("image-viewer");
//     const viewerImg = document.getElementById("viewer-img");
//     const viewerCaption = document.getElementById("viewer-caption");

//     currentImageIndex = index;

//     if (viewer && viewerImg && viewerCaption) {
//         viewer.style.display = "flex";
//         viewerImg.src = galleryImages[currentImageIndex].src;
        
//         // Retrieve the caption from the corresponding gallery image's figure
//         const imageFigure = galleryImages[currentImageIndex].closest("figure");
//         viewerCaption.textContent = imageFigure ? imageFigure.querySelector("figcaption").textContent : "Image Viewer";
//     }
// }

// function changeImage(direction) {
//     currentImageIndex += direction;

//     if (currentImageIndex < 0) {
//         currentImageIndex = galleryImages.length - 1;
//     } else if (currentImageIndex >= galleryImages.length) {
//         currentImageIndex = 0;
//     }

//     document.getElementById("viewer-img").src = galleryImages[currentImageIndex].src;

//     // Update caption dynamically
//     const imageFigure = galleryImages[currentImageIndex].closest("figure");
//     document.getElementById("viewer-caption").textContent = imageFigure ? imageFigure.querySelector("figcaption").textContent : "Image Viewer";
// }

// function closeImage() {
//     document.getElementById("image-viewer").style.display = "none";
// }

//another one more overlay 

let currentImageIndex = 0;
let galleryImages = [];

document.addEventListener("DOMContentLoaded", function () {
    const viewer = document.getElementById("image-viewer");
    const viewerImg = document.getElementById("viewer-img");
    const viewerCaption = document.getElementById("viewer-caption");

    if (viewer) {
        viewer.style.display = "none";
    }

    // Select all images inside gallery-grid and gallery-grid-section
    galleryImages = Array.from(document.querySelectorAll(".gallery-grid img, .gallery-grid-section img"));

    // Add click event to open the image viewer when clicking on images
    galleryImages.forEach((img, index) => {
        img.addEventListener("click", function (event) {
            openImage(index);
        });

        // Fix: Also make the figcaption clickable to open the image viewer
        const imageFigure = img.closest("figure");
        if (imageFigure) {
            const figcaption = imageFigure.querySelector("figcaption");
            if (figcaption) {
                figcaption.addEventListener("click", function (event) {
                    event.stopPropagation(); // Prevent double event firing
                    openImage(index);
                });
            }
        }
    });

    // Close viewer when clicking outside the image
    viewer.addEventListener("click", function (event) {
        if (event.target === viewer) {
            closeImage();
        }
    });

    // Navigation Buttons
    document.getElementById("prev-btn").addEventListener("click", function () {
        changeImage(-1);
    });

    document.getElementById("next-btn").addEventListener("click", function () {
        changeImage(1);
    });

    // Keyboard Navigation
    document.addEventListener("keydown", function (event) {
        if (viewer.style.display === "flex") {
            if (event.key === "ArrowLeft") {
                changeImage(-1);
            } else if (event.key === "ArrowRight") {
                changeImage(1);
            } else if (event.key === "Escape") {
                closeImage();
            }
        }
    });
});

// Open Image in Fullscreen Viewer
function openImage(index) {
    const viewer = document.getElementById("image-viewer");
    const viewerImg = document.getElementById("viewer-img");
    const viewerCaption = document.getElementById("viewer-caption");

    currentImageIndex = index;

    if (viewer && viewerImg && viewerCaption) {
        viewer.style.display = "flex";
        viewerImg.src = galleryImages[currentImageIndex].src;
        
        // Retrieve the caption from the corresponding gallery image's figure
        const imageFigure = galleryImages[currentImageIndex].closest("figure");
        viewerCaption.textContent = imageFigure ? imageFigure.querySelector("figcaption").textContent : "Image Viewer";
    }
}

// Change Image in Viewer
function changeImage(direction) {
    currentImageIndex += direction;

    if (currentImageIndex < 0) {
        currentImageIndex = galleryImages.length - 1;
    } else if (currentImageIndex >= galleryImages.length) {
        currentImageIndex = 0;
    }

    openImage(currentImageIndex);
}

// Close the Image Viewer
function closeImage() {
    document.getElementById("image-viewer").style.display = "none";
}



//Gallery grid gap
document.addEventListener("DOMContentLoaded", function () {
    const galleryGrid = document.querySelector(".gallery-grid");
    const galleryImages = document.querySelectorAll(".gallery-grid img");
    const galleryFigures = document.querySelectorAll(".gallery-grid figure");

    // Force remove gap, margin, and padding for the grid
    galleryGrid.style.gap = "15px";
    galleryGrid.style.margin = "0";
    galleryGrid.style.padding = "0";

    // Remove margins and paddings for images and figures
    galleryImages.forEach(img => {
        img.style.margin = "0";
        img.style.padding = "0";
        img.style.border = "none";
    });

    galleryFigures.forEach(fig => {
        fig.style.margin = "0";
        fig.style.padding = "0";
    });
});

//MobileIcon

// document.addEventListener("DOMContentLoaded", function () {
//     console.log("✅ Script Loaded! Checking elements...");

//     function adjustIconSizes() {
//         let screenWidth = window.innerWidth;
//         let iconSubpages = document.querySelectorAll(".icon-subpage");
//         let iconSubpageImgs = document.querySelectorAll(".icon-subpage img");
//         let footerSubpageImgs = document.querySelectorAll(".footer-subpage img");

//         console.log("🔍 Found", iconSubpages.length, "icon-subpage elements.");
//         console.log("🔍 Found", iconSubpageImgs.length, "icon-subpage img elements.");
//         console.log("🔍 Found", footerSubpageImgs.length, "footer-subpage img elements.");

//         // Apply correct sizes based on screen width
//         iconSubpages.forEach(icon => {
//             icon.style.width = screenWidth <= 768 ? "50px" : "60px";
//             icon.style.height = screenWidth <= 768 ? "50px" : "60px";
//         });

//         iconSubpageImgs.forEach(img => {
//             img.style.width = screenWidth <= 768 ? "25px" : "30px";
//             img.style.height = screenWidth <= 768 ? "25px" : "30px";
//         });

//         footerSubpageImgs.forEach(img => {
//             img.style.width = screenWidth <= 768 ? "20px" : "22px";
//             img.style.height = screenWidth <= 768 ? "20px" : "22px";
//         });

//         console.log("✅ Icon sizes updated.");
//     }

//     // Run on page load
//     adjustIconSizes();

//     // Run when window resizes
//     window.addEventListener("resize", adjustIconSizes);
// });

document.addEventListener("DOMContentLoaded", function() {
    const phoneInput = document.getElementById("phone");

    phoneInput.addEventListener("input", function(event) {
        let value = phoneInput.value.replace(/\D/g, ""); // Remove all non-numeric characters
        let formattedValue = "";

        if (value.length > 0) formattedValue += "(" + value.substring(0, 3);
        if (value.length > 3) formattedValue += ")-" + value.substring(3, 6);
        if (value.length > 6) formattedValue += "-" + value.substring(6, 10);

        phoneInput.value = formattedValue;
    });

    const emailInput = document.getElementById("email");

    emailInput.addEventListener("blur", function () {
        let emailValue = emailInput.value;
        
        // If the user has typed something but missed "@", suggest adding it
        if (emailValue.length > 0 && !emailValue.includes("@")) {
            alert("Please enter a valid email address with '@'.");
        }
    });
});

// document.addEventListener("DOMContentLoaded", function() {
//     let quickLinks = document.querySelector("aside.quick-links");
//     let mainContent = document.querySelector("main");

//     window.addEventListener("scroll", function() {
//         let scrollPosition = window.scrollY;
//         let mainTop = mainContent.offsetTop;

//         if (scrollPosition >= mainTop) {
//             quickLinks.style.position = "fixed";
//             quickLinks.style.top = "20px"; // Keeps it visible when scrolling
//             quickLinks.style.right = "20px"; // Ensures it's on the right side
//         } else {
//             quickLinks.style.position = "absolute";
//             quickLinks.style.top = "0";
//             quickLinks.style.right = "0";
//         }
//     });
// });












    






















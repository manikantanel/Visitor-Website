document.addEventListener("DOMContentLoaded", function () {
    console.log("Script loaded successfully");

    //HEADER SCROLL EFFECT
    window.addEventListener("scroll", function () {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled"); 
        }
    });

   
//Hamburger Menu    
const menuButton = document.querySelector(".hamburger");
const nav = document.getElementById("main-nav");
const dropdownToggles = document.querySelectorAll(".dropbtn");

if (menuButton && nav) {
  // Toggle Hamburger Menu
  menuButton.addEventListener("click", function () {
    nav.classList.toggle("active");
    menuButton.classList.toggle("active");
  });

  // Toggle Dropdown Expand / Collapse + Navigate
  dropdownToggles.forEach(dropbtn => {
    dropbtn.addEventListener("click", function (e) {
      if (window.innerWidth <= 1150) { // Mobile Only
        const parentDropdown = this.parentElement;

        if (!parentDropdown.classList.contains("active")) {
          e.preventDefault(); // Prevent link only on first click (expand)

          // Close other dropdowns
          document.querySelectorAll(".dropdown").forEach(drop => {
            drop.classList.remove("active");
          });

          // Expand clicked dropdown
          parentDropdown.classList.add("active");
        }
        // else = already open => allow link click for navigation
      }
    });
  });

  // Close Nav & Dropdown when Click Outside
  document.addEventListener("click", function (e) {
    if (!e.target.closest("#main-header")) {
      nav.classList.remove("active");
      menuButton.classList.remove("active");
      document.querySelectorAll(".dropdown").forEach(drop => {
        drop.classList.remove("active");
      });
    }
  });
}

    //SEARCH OVERLAY FUNCTIONALITY
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

//HERO IMAGE SLIDER (With DHTML Auto Slide & Transitions)
const slides = document.querySelector(".slides");
const slideElements = document.querySelectorAll(".slide");
const rightArrow = document.querySelector(".right-arrow");
const leftArrow = document.querySelector(".left-arrow");

if (slides && slideElements.length > 0 && rightArrow && leftArrow) {
  let currentSlideIndex = 0;

  function updateHeroSlidePosition() {
    slides.style.transform = `translateX(-${100 * currentSlideIndex}%)`;

    //fade effect by toggling 'active' class
    slideElements.forEach((slide, index) => {
      slide.style.opacity = index === currentSlideIndex ? "1" : "0.2";
    });
  }

  // Manual Controls
  rightArrow.addEventListener("click", function () {
    currentSlideIndex = (currentSlideIndex + 1) % slideElements.length;
    updateHeroSlidePosition();
  });

  leftArrow.addEventListener("click", function () {
    currentSlideIndex = (currentSlideIndex - 1 + slideElements.length) % slideElements.length;
    updateHeroSlidePosition();
  });

  // Touch swipe functionality
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
      currentSlideIndex = (currentSlideIndex + 1) % slideElements.length;
    } else if (swipeDistance < -50) {
      currentSlideIndex = (currentSlideIndex - 1 + slideElements.length) % slideElements.length;
    }
    updateHeroSlidePosition();
  });

  //DHTML auto-slide using setInterval()
  setInterval(() => {
    currentSlideIndex = (currentSlideIndex + 1) % slideElements.length;
    updateHeroSlidePosition();
  }, 8000); // Slide every 6 seconds

  updateHeroSlidePosition();
}

  //IMAGE CARD SLIDER FUNCTIONALITY
  const slider = document.querySelector(".slider");
  const cards = document.querySelectorAll(".card");
  const prevBtn = document.getElementById("attractions-left-arrow");
  const nextBtn = document.getElementById("attractions-right-arrow");

  if (slider && cards.length > 0 && prevBtn && nextBtn) {
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
          const cardsPerRow = getCardsPerRow();
          const cardWidth = cards[0].offsetWidth;
          const style = getComputedStyle(cards[0]);
          const gap = parseInt(style.marginRight || 0);

          const totalCardWidth = cardWidth + gap;
          const maxMove = totalCardWidth * (cards.length - cardsPerRow);
          const moveX = Math.min(totalCardWidth * cardsPerRow * currentIndex, maxMove);

          slider.style.transition = "transform 0.7s ease-in-out";
          slider.style.transform = `translateX(-${moveX}px)`;

          // DHTML effect: highlight first visible card
          const firstVisibleIndex = currentIndex * cardsPerRow;
          const firstCard = cards[firstVisibleIndex];

          if (firstCard) {
              firstCard.classList.add("active-highlight");

              setTimeout(() => {
                  firstCard.classList.remove("active-highlight");
              }, 1000);
          }
      }

      function goToNextSlide() {
          const cardsPerRow = getCardsPerRow();
          const totalSlides = Math.ceil(cards.length / cardsPerRow);

          if (currentIndex < totalSlides - 1) {
              currentIndex++;
          } else {
              currentIndex = 0; // Loop back to the first slide
          }
          updateSlidePosition();
      }

      function goToPreviousSlide() {
          const cardsPerRow = getCardsPerRow();
          const totalSlides = Math.ceil(cards.length / cardsPerRow);

          if (currentIndex > 0) {
              currentIndex--;
          } else {
              currentIndex = totalSlides - 1; // Loop back to the last slide
          }
          updateSlidePosition();
      }

      nextBtn.addEventListener("click", goToNextSlide);
      prevBtn.addEventListener("click", goToPreviousSlide);

      // Swipe Functionality for Mobile
      let startX = 0;
      let endX = 0;

      slider.addEventListener("touchstart", (e) => {
          startX = e.touches[0].clientX;
      }, { passive: true });

      slider.addEventListener("touchend", (e) => {
          endX = e.changedTouches[0].clientX;
          const diff = startX - endX;

          if (diff > 50) {
              goToNextSlide();
          } else if (diff < -50) {
              goToPreviousSlide();
          }
      }, { passive: true });

      window.addEventListener("resize", updateSlidePosition);
      updateSlidePosition();
  }
});


//BACK TO TOP BUTTON
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


//Image Viewer
let currentImageIndex = 0;
let currentGalleryImages = [];

document.addEventListener("DOMContentLoaded", function () {
    const viewer = document.getElementById("image-viewer");
    const viewerImg = document.getElementById("viewer-img");
    const viewerCaption = document.getElementById("viewer-caption");

    if (viewer) {
        viewer.style.display = "none";
    }

    // Handle each gallery grid independently
    document.querySelectorAll(".gallery-grid, .gallery-grid-section").forEach(galleryGrid => {
        const images = Array.from(galleryGrid.querySelectorAll("img"));

        images.forEach((img, index) => {
            img.addEventListener("click", function () {
                openImage(index, images);
            });

            const imageFigure = img.closest("figure");
            if (imageFigure) {
                const figcaption = imageFigure.querySelector("figcaption");
                if (figcaption) {
                    figcaption.addEventListener("click", function (event) {
                        event.stopPropagation();
                        openImage(index, images);
                    });
                }
            }
        });
    });

    if (viewer) {
      viewer.addEventListener("click", function (event) {
          if (event.target === viewer) {
              closeImage();
          }
      });

      //Touch Swipe Support for Mobile
      let touchStartX = 0;
      let touchEndX = 0;

      viewer.addEventListener("touchstart", function (event) {
          touchStartX = event.changedTouches[0].screenX;
      });

      viewer.addEventListener("touchend", function (event) {
          touchEndX = event.changedTouches[0].screenX;
          handleSwipe();
      });

      function handleSwipe() {
          const swipeThreshold = 50; // minimum distance for swipe

          if (touchEndX < touchStartX - swipeThreshold) {
              changeImage(1); // swipe left → next image
          } else if (touchEndX > touchStartX + swipeThreshold) {
              changeImage(-1); // swipe right → previous image
          }
      }
  }

  const prevBtn = document.getElementById("prev-btn");
  const nextBtn = document.getElementById("next-btn");

  if (prevBtn && nextBtn) {
      prevBtn.addEventListener("click", function () {
          changeImage(-1);
      });

      nextBtn.addEventListener("click", function () {
          changeImage(1);
      });
  }

  document.addEventListener("keydown", function (event) {
      if (viewer && viewer.style.display === "flex") {
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
function openImage(index, imagesArray) {
    const viewer = document.getElementById("image-viewer");
    const viewerImg = document.getElementById("viewer-img");
    const viewerCaption = document.getElementById("viewer-caption");

    if (!viewer || !viewerImg || !viewerCaption || imagesArray.length === 0) {
        console.warn("Image viewer or images not found.");
        return;
    }

    currentGalleryImages = imagesArray;
    currentImageIndex = index;
    viewer.style.display = "flex";

    // Fade animation
    viewer.classList.add("fade-in");
    setTimeout(() => viewer.classList.remove("fade-in"), 500);

    viewerImg.src = currentGalleryImages[currentImageIndex].src;

    const imageFigure = currentGalleryImages[currentImageIndex].closest("figure");
    viewerCaption.textContent = imageFigure && imageFigure.querySelector("figcaption")
        ? imageFigure.querySelector("figcaption").textContent
        : "Image Viewer";

    document.body.classList.add("viewer-open");
}

// Change Image Within Current Gallery Only
function changeImage(direction) {
    if (currentGalleryImages.length === 0) return;

    currentImageIndex += direction;

    if (currentImageIndex < 0) {
        currentImageIndex = currentGalleryImages.length - 1;
    } else if (currentImageIndex >= currentGalleryImages.length) {
        currentImageIndex = 0;
    }

    openImage(currentImageIndex, currentGalleryImages);
}

// Close the Viewer
function closeImage() {
    const viewer = document.getElementById("image-viewer");
    if (viewer) {
        viewer.style.display = "none";
        document.body.classList.remove("viewer-open");
    }
}




document.addEventListener("DOMContentLoaded", function () {
    console.log("Script loaded successfully");

    //Phone Input Formatting (Only if #phone Exists)
    const phoneInput = document.getElementById("phone");

    if (phoneInput) {
        phoneInput.addEventListener("input", function () {
            let value = phoneInput.value.replace(/\D/g, ""); // Remove all non-numeric characters
            let formattedValue = "";

            if (value.length > 0) formattedValue += "(" + value.substring(0, 3);
            if (value.length > 3) formattedValue += ")-" + value.substring(3, 6);
            if (value.length > 6) formattedValue += "-" + value.substring(6, 10);

            phoneInput.value = formattedValue;
        });
    }

    /*** Email Validation ***/
    const emailInput = document.getElementById("email");

    if (emailInput) {
        emailInput.addEventListener("blur", function () {
            let emailValue = emailInput.value;

           
            if (emailValue.length > 0 && !emailValue.includes("@")) {
                alert("Please enter a valid email address with '@'.");
            }
        });
    }
});

//Search bar 
document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const query = urlParams.get("q");

    const searchQueryElement = document.getElementById("search-query");
    const resultsList = document.getElementById("results-list");

  
    if (searchQueryElement) {
        searchQueryElement.textContent = query || "No query provided";
    }

    if (resultsList) {
        const allResults = [
            { name: "Attractions", url: "attractions.php", keywords: ["historic", "landmark", "tourism"] },
            { name: "Events", url: "events.php", keywords: ["festival", "celebration", "historic"] },
            { name: "Guided Tours", url: "guided-tours.php", keywords: ["tour", "historic", "experience"] },
            { name: "Travel Tips", url: "travel-tips.php", keywords: [
                "tips", "advice", "guide", 
                "Packing Tips for Colonial Williamsburg", "packing", "comfortable walking shoes", "weather-appropriate clothing", "refillable water bottle", "sunscreen", 
                "Getting Around Williamsburg", "transportation", "Williamsburg Trolley", "rental bikes", "nature trails", "parks", 
                "Understanding Local Customs and Culture", "local culture", "traditional colonial meals", "local taverns", "historical reenactments"]
            }
        ];

        if (query) {
            const formattedQuery = query.toLowerCase().trim();
            const filteredResults = allResults.filter(item =>
                item.name.toLowerCase().includes(formattedQuery) ||
                item.keywords.some(keyword => keyword.toLowerCase().includes(formattedQuery))
            );

            resultsList.innerHTML = ""; 
            if (filteredResults.length > 0) {
                filteredResults.forEach(item => {
                    const li = document.createElement("li");
                    li.innerHTML = `<a href='${item.url}'>${item.name}</a>`;
                    resultsList.appendChild(li);
                });
            } else {
                resultsList.innerHTML = "<li>No results found</li>";
            }
        } else {
            resultsList.innerHTML = "<li>No search query provided</li>";
        }
    }
});

document.getElementById("open-search").addEventListener("click", function() {
    document.getElementById("search-overlay").style.display = "flex";
});

document.getElementById("close-search").addEventListener("click", function() {
    document.getElementById("search-overlay").style.display = "none";
});


//Tips travel on homepage
document.addEventListener("DOMContentLoaded", function () {
  const tips = [
    "Book your carriage ride in advance to avoid missing out.",
    "Try the evening lantern tours for a unique experience.",
    "Pack comfortable walking shoes for the historic district.",
    "Use the Williamsburg Trolley to get around town easily.",
    "Visit local taverns for colonial-style meals!"
  ];

  const tipBox = document.getElementById("tip-box");
  const tipText = document.getElementById("tip-text");
  let index = 0;

  if (!tipBox || !tipText) return; // Safe exit if missing

  function showTip() {
    tipBox.classList.remove("visible");

    setTimeout(() => {
      tipText.textContent = tips[index];
      tipBox.classList.add("visible");
      index = (index + 1) % tips.length;
    }, 500);
  }

  setInterval(showTip, 6000);
  showTip();
});

//Comment Form 
  function validateForm() {
    const form = document.forms["commentForm"];
    const name = form["name"].value.trim();
    const email = form["email"].value.trim();
    const comment = form["comment"].value.trim();
    const rating = form["rating"].value;
    const location = form["location"].value.trim();
    const recommend = document.querySelector('input[name="recommend"]:checked');
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/;

    if (!name || !email || !comment || !location || !recommend) {
      alert("Please fill in all required fields.");
      return false;
    }

    if (!email.match(emailPattern)) {
      alert("Please enter a valid email address with '@' and domain, like example@domain.com.");
      return false;
    }

    if (rating < 1 || rating > 5) {
      alert("Please select a rating between 1 and 5.");
      return false;
    }

    return true;
  }

//Rating Comment Form
function updateRating(value) {
    document.getElementById('ratingValue').textContent = value;
}

//Weather Widget
  document.addEventListener("DOMContentLoaded", () => {
    const apiKey = "99878688eb077ef84c4b87dc67a68973";
    const city = "Williamsburg,US";
    const weatherDiv = document.getElementById("weather-widget");
    const weatherContent = weatherDiv.querySelector(".weather-content");
    const toggleBtn = document.getElementById("weather-toggle");
  
    // Fetch Weather API
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=imperial`)
      .then(response => {
        if (!response.ok) {
          throw new Error(`API call failed with status: ${response.status}`);
        }
        return response.json();
      })
      .then(data => {
        const temp = Math.round(data.main.temp);
        const description = data.weather[0].description;
        const icon = data.weather[0].icon;
        weatherContent.innerHTML = `
          <div class="weather-box">
            <img src="https://openweathermap.org/img/wn/${icon}@2x.png" alt="${description}">
            <div class="weather-text">
              <strong>${city}</strong><br>
              ${description}<br>
              <span>${temp}&deg;F</span>
            </div>
          </div>
        `;
      })
      .catch(error => {
        console.error("Weather API Error:", error);
        weatherContent.innerHTML = `<p>Unable to load weather ❌</p>`;
      });
  
    // Toggle Expand/Collapse for Mobile
    toggleBtn.addEventListener("click", (e) => {
      e.stopPropagation(); // Prevent click event bubbling
      weatherDiv.classList.toggle("open");
    });
  
    // Close weather widget when clicking outside (Mobile Only)
    document.addEventListener("click", (e) => {
      if (
        weatherDiv.classList.contains("open") &&
        !weatherDiv.contains(e.target)
      ) {
        weatherDiv.classList.remove("open");
      }
    });
  });
  
  //Block Date calendar on Form
  document.addEventListener("DOMContentLoaded", function () {
    console.log("Date control script loaded");

    const today = new Date();
    today.setHours(0, 0, 0, 0); // Reset time
    const isoToday = today.toISOString().split("T")[0];

    const checkinInput = document.getElementById("checkin");
    const checkoutInput = document.getElementById("checkout");

    if (checkinInput && checkoutInput) {
        checkinInput.setAttribute("min", isoToday);
        checkoutInput.setAttribute("min", isoToday);

        checkinInput.value = isoToday;
        checkoutInput.value = isoToday;

        checkinInput.addEventListener("change", function () {
            const selected = checkinInput.value;
            checkoutInput.setAttribute("min", selected);

            if (checkoutInput.value < selected) {
                checkoutInput.value = selected; // auto-adjust
            }
        });
    }
});

//Auto fill today's date
document.addEventListener("DOMContentLoaded", function () {
    const ticketDateInput = document.getElementById("date");
  
    if (ticketDateInput) {
      const today = new Date();
      today.setHours(0, 0, 0, 0); // Reset time
      const isoToday = today.toISOString().split("T")[0];
  
      ticketDateInput.setAttribute("min", isoToday);
      ticketDateInput.value = isoToday; // autofill today's date
    }
  });

//Countdown Timer
  document.addEventListener("DOMContentLoaded", function () {
    const countdownElement = document.getElementById("countdown");
    const button = document.getElementById("offer-btn");

    // Exit if elements not found (safe for pages without countdown)
    if (!countdownElement || !button) return;

    // Set Deal End Time
    const dealEndTime = new Date("2025-05-12T23:59:59").getTime();

    let timerInterval; // Declare first to avoid ReferenceError

    function updateCountdown() {
        const now = new Date().getTime();
        const timeLeft = dealEndTime - now;

        if (timeLeft <= 0) {
            countdownElement.textContent = "Offer expired!";
            button.style.display = "inline-block";  // Show offer button after timer ends
            clearInterval(timerInterval); // Now safely defined
            return;
        }

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }

    updateCountdown(); // Initial Call

    timerInterval = setInterval(updateCountdown, 1000); // Every Second

    // For Testing Only - Force show button
    // button.style.display = "inline-block";

});

//Map container
window.addEventListener("scroll", function () {
  const map = document.querySelector(".map-container iframe");

  if (!map) return;  // Prevent error if map is not found

  const position = map.getBoundingClientRect().top;
  const screenHeight = window.innerHeight;

  if (position < screenHeight * 0.9) {
    map.style.transform = "scale(1.03)";
    map.style.transition = "transform 0.5s ease-in-out";
  } else {
    map.style.transform = "scale(1)";
  }
});

//Pop up modal
document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("popup-modal");
  const closeBtn = document.querySelector(".close-popup");

  // Exit safely if popup not found
  if (!popup || !closeBtn) return;

  // Uncomment to test (Force Reset)
  // localStorage.removeItem("popupClosed");

  // Check localStorage
  const isPopupClosed = localStorage.getItem("popupClosed");

  if (!isPopupClosed) {
    // Show popup after 1 second
    setTimeout(() => {
      popup.classList.add("show-popup");
    }, 1000);
  }

  // Close Popup Event
  closeBtn.addEventListener("click", () => {
    popup.classList.remove("show-popup");
    localStorage.setItem("popupClosed", "true");
  });
});

//Accesibility Widget
document.addEventListener("DOMContentLoaded", () => {
  const toggleBtn = document.getElementById("access-toggle");
  const panel = document.querySelector(".access-panel");
  const darkBtn = document.getElementById("toggle-darkmode");
  const modeLabel = document.getElementById("mode-label");
  const magnifyBtn = document.getElementById("toggle-textmagnifier");

  let magnifyEnabled = false;

  // Load Dark Mode from Local Storage
  if (localStorage.getItem("dark-mode") === "enabled") {
    document.body.classList.add("dark-mode");
    document.getElementById("icon-moon").style.display = "none";
    document.getElementById("icon-sun").style.display = "inline";
    modeLabel.textContent = "Light Mode";
  }

 // Toggle Panel Event
toggleBtn.addEventListener("click", () => {
  panel.classList.toggle("open");

  const isOpen = panel.classList.contains("open");

  toggleBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");

  if (isOpen) {
    document.body.classList.add("access-open"); // Move Weather Widget Up
  } else {
    document.body.classList.remove("access-open"); // Move Weather Widget Down
  }
});

  // Close Access Panel When Click Outside
  document.addEventListener("click", (event) => {
    if (
      panel.classList.contains("open") &&
      !event.target.closest(".access-widget")
    ) {
      panel.classList.remove("open");
      toggleBtn.setAttribute("aria-expanded", "false");
      document.body.classList.remove("access-open");  // Reset Weather Widget Down
    }
  }); 

  // Toggle Dark Mode
  darkBtn.addEventListener("click", () => {
    const isDark = document.body.classList.toggle("dark-mode");

    if (isDark) {
      document.getElementById("icon-moon").style.display = "none";
      document.getElementById("icon-sun").style.display = "inline";
      modeLabel.textContent = "Light Mode";
      localStorage.setItem("dark-mode", "enabled");
    } else {
      document.getElementById("icon-sun").style.display = "none";
      document.getElementById("icon-moon").style.display = "inline";
      modeLabel.textContent = "Dark Mode";
      localStorage.setItem("dark-mode", "disabled");
    }
  });

  // Toggle Text Magnifier
  magnifyBtn.addEventListener("click", () => {
    magnifyEnabled = !magnifyEnabled;
    if (magnifyEnabled) {
      activateMagnifier();
    } else {
      deactivateMagnifier();
    }
  });

  function activateMagnifier() {
    document.querySelectorAll("p, span, a, h1, h2, h3, h4, li, label, input, select, textarea").forEach(el => {
      el.addEventListener("mouseenter", addZoom);
      el.addEventListener("mouseleave", removeZoom);
    });
  }

  function deactivateMagnifier() {
    document.querySelectorAll("p, span, a, h1, h2, h3, h4, li, label, input, select, textarea").forEach(el => {
      el.removeEventListener("mouseenter", addZoom);
      el.removeEventListener("mouseleave", removeZoom);
      el.classList.remove("text-magnified");
    });
  }

  function addZoom(e) {
    if (!e.target.closest(".access-widget")) {
      e.target.classList.add("text-magnified");
    }
  }

  function removeZoom(e) {
    e.target.classList.remove("text-magnified");
  }
});

// HTML escape to prevent XSS in overlay
function escapeHTML(str) {
  return str
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;");
}

// getUsers() to global scope so AJAX can call it after submission
function getUsers() {
  const track = document.getElementById("testimonialTrack");
  const dotsContainer = document.getElementById("dotsContainer");

  var http = new XMLHttpRequest();
  http.onreadystatechange = function () {
    if (http.readyState == 4 && http.status == 200) {
      const data = JSON.parse(http.responseText);
      if (data.length > 0) {
        renderTestimonials(data);
        document.querySelector('.testimonials-slider').style.display = 'block'; // Show testimonial box
      } else {
        track.innerHTML = "<p>No testimonials found!</p>";
      }
    }
  };

  http.open("GET", "assets/inc/getcomments.inc.php", true);
  http.send();
}

function renderTestimonials(data) {
  const track = document.getElementById("testimonialTrack");
  const dotsContainer = document.getElementById("dotsContainer");

  let output = "";

  data.forEach(item => {
    const profileImage = item.image_url ? item.image_url : "assets/images/Profile_Default.jpg";

    output += `
    <div class="testimonial-slide">
      <img src="${profileImage}" alt="User Image" class="profile-img">
      <p style="font-style:italic;">“${escapeHTML(item.comment)}”</p>
      <p class="stars">${"⭐".repeat(item.rating)} <strong>${escapeHTML(item.name)}</strong></p>
      <small>${escapeHTML(item.created_at)}</small>
    </div>`;

  });

  track.innerHTML = output;

  slideCount = data.length;
  currentSlide = 0;
  slidesToShow = calculateSlidesToShow();
  createDots();
  updateSlider();
}

document.addEventListener("DOMContentLoaded", function () {
  const track = document.getElementById("testimonialTrack");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  if (track) {
    getUsers(); // Load testimonials initially
    setInterval(getUsers, 20000); // Auto-refresh
  }

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener("click", showPrev);
    nextBtn.addEventListener("click", showNext);
  }

  window.addEventListener("resize", () => {
    if (track) {
      slidesToShow = calculateSlidesToShow();
      createDots();
      updateSlider();
    }
  });
});


let currentSlide = 0;
let slidesToShow = calculateSlidesToShow();
let slideCount = 0;

function calculateSlidesToShow() {
  const width = window.innerWidth;
  if (width >= 900) return 3;
  if (width >= 600) return 2;
  return 1;
}

function createDots() {
  const dotsContainer = document.getElementById("dotsContainer");
  dotsContainer.innerHTML = "";
  const totalDots = Math.ceil(slideCount / slidesToShow);
  for (let i = 0; i < totalDots; i++) {
    const dot = document.createElement("span");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => {
      currentSlide = i * slidesToShow;
      updateSlider();
    });
    dotsContainer.appendChild(dot);
  }
}

function updateDots() {
  const dots = document.querySelectorAll(".dot");
  dots.forEach(dot => dot.classList.remove("active"));
  const activeIndex = Math.floor(currentSlide / slidesToShow);
  if (dots[activeIndex]) dots[activeIndex].classList.add("active");
}

function updateSlider() {
  const track = document.getElementById("testimonialTrack");
  const slides = document.querySelectorAll(".testimonial-slide");
  if (slides.length === 0) return;

  const slideWidth = slides[0].offsetWidth + 20; // Include margin
  const containerWidth = document.querySelector(".testimonial-slider-container").offsetWidth;
  const totalVisibleWidth = slideWidth * slidesToShow;
  const extraSpace = (containerWidth - totalVisibleWidth) / 2;

  const offset = currentSlide * slideWidth;
  track.style.transform = `translateX(-${offset - extraSpace}px)`;

  updateDots();
}

document.addEventListener("DOMContentLoaded", function() {
  let startX = 0;
  let endX = 0;
  const track = document.getElementById("testimonialTrack");

  if (track) {
    track.addEventListener("touchstart", e => {
      startX = e.touches[0].clientX;
    });

    track.addEventListener("touchend", e => {
      endX = e.changedTouches[0].clientX;
      if (startX - endX > 50) showNext();
      if (endX - startX > 50) showPrev();
    });
  }
});

function showNext() {
  if (currentSlide < slideCount - slidesToShow) {
    currentSlide++;
  } else {
    currentSlide = 0;
  }
  updateSlider();
}

function showPrev() {
  if (currentSlide > 0) {
    currentSlide--;
  } else {
    currentSlide = Math.max(slideCount - slidesToShow, 0);
  }
  updateSlider();
}


function submitCommentForm() {
  const form = document.getElementById('commentForm');
  const submitBtn = form.querySelector('input[type="submit"]');
  const overlay = document.getElementById("thankYouOverlay");
  const overlayMessage = document.getElementById("overlayMessage");

  // Inline validation
  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const comment = form.comment.value.trim();
  const location = form.location.value.trim();
  const recommend = form.recommend.value;
  const rating = form.rating.value;

  if (!name || !email || !comment || !location || !recommend || rating < 1) {
    alert("⚠️ Please fill in all required fields correctly.");
    return false;
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert("⚠️ Please enter a valid email address.");
    return false;
  }

  // Show loading text on button
  const originalBtnText = submitBtn.value;
  submitBtn.value = "Submitting...";
  submitBtn.disabled = true;

  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();

  xhr.open("POST", "assets/inc/insertcomment.inc.php", true);

  xhr.onload = function () {
    submitBtn.value = originalBtnText;
    submitBtn.disabled = false;

    let res;
    try {
      res = JSON.parse(xhr.responseText);
    } catch (e) {
      alert("❌ Invalid response from server.");
      return;
    }

    if (res.status === "success") {
      // Check if image exists, otherwise use default
      const profileImage = res.image_url ? res.image_url : "assets/images/Profile_Default.jpg";

      const message = `
        <div style="text-align:center;">
          <img src="${profileImage}" alt="Profile Image" style="width:80px; height:80px; object-fit:cover; border-radius:50%; border:2px solid #2176bd; margin-bottom:10px;">
        </div>
        <p style="color:green;">✔️ Thank you, <strong>${escapeHTML(res.name)}</strong>! Your comment was submitted on <em>${res.date}</em>.</p>
        <p><strong>Email:</strong> ${res.email}</p>
        <p><strong>Location:</strong> ${escapeHTML(res.location)}</p>
        <p><strong>Rating:</strong> ${res.rating} ⭐</p>
        <p><strong>Recommendation:</strong> ${res.recommend}</p>
        <div><strong>Comment:</strong><br>“${escapeHTML(res.comment)}”</div>
      `;
      
      overlayMessage.innerHTML = message;
      overlay.style.display = "flex";
      form.reset();
      getUsers();
    
      setTimeout(() => {
        closeOverlay();
      }, 10000);
    } 
    else {
      alert("❌ " + (res.message || "Submission failed."));
    }
  };

  xhr.send(formData);
  return false; // Prevent default submit
}


// Close Overlay Button
function closeOverlay() {
  document.getElementById("thankYouOverlay").style.display = "none";
}


//Valid confirm password
function validatePasswords() {
  const pass = document.getElementById("password").value;
  const confirm = document.getElementById("confirm_password").value;

  // Password strength regex
  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;

  if (!regex.test(pass)) {
    alert("❌ Password must be at least 8 characters and include:\n• 1 uppercase letter\n• 1 lowercase letter\n• 1 number\n• 1 symbol");
    return false;
  }

  if (pass !== confirm) {
    alert("❌ Passwords do not match!");
    return false;
  }

  return true;
}

//TogglePassword show/hidden
function togglePassword(fieldId, icon) {
  const input = document.getElementById(fieldId);
  const isPassword = input.getAttribute("type") === "password";
  input.setAttribute("type", isPassword ? "text" : "password");
  icon.classList.toggle("fa-eye");
  icon.classList.toggle("fa-eye-slash");
}

// Validate Login
function validateLoginForm() {
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  // Check if both fields empty
  if (username === "" && password === "") {
    alert("Username and Password are required.");
    return false;
  }

  // Check if username empty
  if (username === "") {
    alert("Invalid Username! Please enter your username.");
    return false;
  }

  // Check if password empty
  if (password === "") {
    alert("Invalid Password! Please enter your password.");
    return false;
  }

  // Check username length
  if (username.length < 3) {
    // If username is too short AND password too short
    if (password.length < 6) {
      alert("Invalid. Try again.");  // both wrong
    } else {
      alert("Invalid Username! Username must be at least 3 characters.");
    }
    return false;
  }

  // Check password length
  if (password.length < 6) {
    alert("Invalid Password! Password must be at least 6 characters.");
    return false;
  }

  return true;
}








  
  
  



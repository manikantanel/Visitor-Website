<?php
  $currentPage = basename($_SERVER['PHP_SELF']);

  $titles = [
    'index.php' => 'Home | Williamsburg Port',
    'restaurants.php' => 'Restaurant | Top Restaurant in Williamsburg Port',
    'hotels.php' => 'Hotels | Best Hotels in Williamsburg Port',
    'historic-inns.php' => 'Historic Inns | Classic Colonial Lodging',
    'events.php' => 'Events | Top Events in Williamsburg Port',
    'current-events.php' => 'Current Events | What’s Happening Now',
    'annual-festivals.php' => 'Annual Festivals | Celebrate Williamsburg',
    'guided-tours.php' => 'Guided Tours | Explore with a Guide',
    'walking-tours.php' => 'Walking Tours | Discover Step by Step',
    'carriage-rides.php' => 'Carriage Rides | Travel in Style',
    'audio-tours.php' => 'Audio Tours | Listen & Learn',
    'historic-sites.php' => 'Historic Sites | Dive Into History',
    'museums.php' => 'Museums | Learn and Explore',
    'parks-nature.php' => 'Parks & Nature | Relax Outdoors',
    'ticket.php' => 'Tickets | Get Yours Now',
    'registration.php' => 'Registration | Plan Your Visit',
    'special-deals.php' => 'Special Deals | Save on Your Trip',
    'contact.php' => 'Contact Us | Get Help or Support'
  ];

  $title = $titles[$currentPage] ?? 'Williamsburg Port';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/Logo_CW.PNG">
    <meta name="description" content="Explore attractions, events, guided tours, and travel tips for a memorable experience at Williamsburg Port, Colonial Virginia.">
    <!--Font Link-->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=EB+Garamond:wght@400;700&display=swap" rel="stylesheet">
    <!--Style Link-->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<header id="main-header">
  <div class="logo">
    <a href="index.php">
      <img src="assets/images/Logo_CW.PNG" alt="Williamsburg Port Logo" class="logo">
    </a>
  </div>

  <button class="hamburger" aria-label="Toggle navigation">
    <span></span><span></span><span></span>
  </button>
  <button class="nav-search" id="open-search">
    <img src="assets/images/loupe.png" alt="Open Search">
  </button>

  <!-- Search Overlay -->
  <div id="search-overlay" class="search-overlay">
    <div class="search-box">
      <button id="close-search" aria-label="Close Search">✖</button>
      <form id="search-form" action="search-results.html" method="GET">
        <label for="search-input" class="visually-hidden">Search Williamsburg Port</label>
        <input type="text" id="search-input" name="q" placeholder="Search..." aria-label="Search Williamsburg Port">
        <button type="submit" id="search-button">
          <img src="assets/images/loupe.png" alt="Search" width="20" height="20" class="img-invert">
        </button>
      </form>
    </div>
  </div>

  <nav id="main-nav">
    <ul class="nav-links">
      <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>

      <li class="dropdown">
        <a href="attractions.php" class="dropbtn <?= in_array($currentPage, ['historic-sites.php','museums.php','parks-nature.php']) ? 'active' : '' ?>">Attractions &#9662;</a>
        <ul class="dropdown-content">
          <li><a href="historic-sites.php">Historic Sites</a></li>
          <li><a href="museums.php">Museums</a></li>
          <li><a href="parks-nature.php">Parks & Nature</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="events.php" class="dropbtn <?= in_array($currentPage, ['current-events.php','annual-festivals.php']) ? 'active' : '' ?>">Events &#9662;</a>
        <ul class="dropdown-content">
          <li><a href="current-events.php" class="<?= $currentPage == 'current-events.php' ? 'active' : '' ?>">Current Events</a></li>
          <li><a href="annual-festivals.php" class="<?= $currentPage == 'annual-festivals.php' ? 'active' : '' ?>">Annual Festivals</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="guided-tours.php" class="dropbtn <?= in_array($currentPage, ['walking-tours.php','carriage-rides.php','audio-tours.php']) ? 'active' : '' ?>">Guided Tour &#9662;</a>
        <ul class="dropdown-content">
          <li><a href="walking-tours.php" class="<?= $currentPage == 'walking-tours.php' ? 'active' : '' ?>">Walking Tours</a></li>
          <li><a href="carriage-rides.php" class="<?= $currentPage == 'carriage-rides.php' ? 'active' : '' ?>">Carriage Rides</a></li>
          <li><a href="audio-tours.php" class="<?= $currentPage == 'audio-tours.php' ? 'active' : '' ?>">Audio Tours</a></li>
        </ul>
      </li>

      <li><a href="travel-tips.php" class="<?= $currentPage == 'travel-tips.php' ? 'active' : '' ?>">Travel Tips</a></li>

      <li class="dropdown">
        <a href="accommodations.php" class="dropbtn <?= in_array($currentPage, ['hotels.php','historic-inns.php','restaurants.php']) ? 'active' : '' ?>">Accommodations &#9662;</a>
        <ul class="dropdown-content">
          <li><a href="hotels.php" class="<?= $currentPage == 'hotels.php' ? 'active' : '' ?>">Hotels</a></li>
          <li><a href="historic-inns.php" class="<?= $currentPage == 'historic-inns.php' ? 'active' : '' ?>">Historic Inns</a></li>
          <li><a href="restaurants.php" class="<?= $currentPage == 'restaurants.php' ? 'active' : '' ?>">Restaurants</a></li>
        </ul>
      </li>

      <li><a href="ticket.php" class="<?= $currentPage == 'ticket.php' ? 'active' : '' ?>">Ticket</a></li>
      <li><a href="registration.php" class="<?= $currentPage == 'registration.php' ? 'active' : '' ?>">Registration</a></li>
      <li><a href="special-deals.php" class="<?= $currentPage == 'special-deals.php' ? 'active' : '' ?>">Special Deals</a></li>
      <li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact/Support</a></li>
    </ul>
  </nav>
</header>

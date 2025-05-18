<!-- Author : Manikantan Eakiri Lakshmanan -->
<!-- Individual Final Project -->
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once('db_connect.inc.php');
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
  'contact.php' => 'Contact Us | Get Help or Support',
  'profile.php' => 'My Account | Williamsburg Port',
  'attractions.php' => 'Attractions | Discover Williamsburg Port',
  'travel-tips.php' => 'Travel Tips | Plan Your Journey',
  'accommodations.php' => 'Accommodations | Stay Comfortably',
  'login.php' => 'Login | Access Your Account',
  'confirmation_contact.php' => 'Confirmation | Contact Submission Success',
  'confirmation_hotel.php' => 'Confirmation | Hotel Booking Success',
  'confirmation_ticket.php' => 'Confirmation | Ticket Booking Success',
  'confirmation_registration.php' => 'Confirmation | Registration Success',
  'documentation.php' => 'Documentation | Project Details',
  'search-results.php' => 'Search Results | Williamsburg Port',
  'works-cited.php' => 'Works Cited | References and Sources'
];

$title = $titles[$currentPage] ?? 'Williamsburg Port';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="icon" type="image/png" href="assets/images/Logo_CW.png">
  <meta name="description" content="Explore attractions, events, guided tours, and travel tips for a memorable experience at Williamsburg Port, Colonial Virginia.">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=EB+Garamond:wght@400;700&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<header id="main-header">
  <div class="logo">
    <a href="index.php">
      <img src="assets/images/Logo_CW.png" alt="Williamsburg Port Logo" class="logo">
    </a>
  </div>

  <!--Hamburger Icon-->
  <button class="hamburger" aria-label="Toggle navigation">
    <span></span><span></span><span></span>
  </button>

  <!--Search icon-->
  <button class="nav-search" id="open-search">
    <img src="assets/images/loupe.png" alt="Open Search">
  </button>

  <!-- Search Overlay -->
  <div id="search-overlay" class="search-overlay">
    <div class="search-box">
      <button id="close-search" aria-label="Close Search">✖</button>
      <form id="search-form" action="search-results.php" method="GET">
        <label for="search-input" class="visually-hidden">Search Williamsburg Port</label>
        <input type="text" id="search-input" name="q" placeholder="Search..." aria-label="Search Williamsburg Port">
        <button type="submit" id="search-button">
          <img src="assets/images/loupe.png" alt="Search" width="20" height="20" class="img-invert">
        </button>
      </form>
    </div>
  </div>

  <!--User icon-->
  <?php if (isset($_SESSION['user_id'])): ?>
  <a href="profile.php" class="mobile-user-icon" aria-label="My Account">
    <i class="fas fa-user"></i>
  </a>
  <?php else: ?>
    <a href="login.php" class="mobile-user-icon" aria-label="Login">
      <i class="fas fa-sign-in-alt"></i>
    </a>
  <?php endif; ?>


  <nav id="main-nav">
  <ul class="nav-links">
    <!-- Attractions -->
    <li class="dropdown">
      <a href="attractions.php" class="dropbtn <?= in_array($currentPage, ['attractions.php','historic-sites.php','museums.php','parks-nature.php']) ? 'active' : '' ?>">Attractions &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="historic-sites.php" class="<?= $currentPage == 'historic-sites.php' ? 'active' : '' ?>">Historic Sites</a></li>
        <li><a href="museums.php" class="<?= $currentPage == 'museums.php' ? 'active' : '' ?>">Museums</a></li>
        <li><a href="parks-nature.php" class="<?= $currentPage == 'parks-nature.php' ? 'active' : '' ?>">Parks & Nature</a></li>
      </ul>
    </li>

    <!-- Events -->
    <li class="dropdown">
      <a href="events.php" class="dropbtn <?= in_array($currentPage, ['events.php','current-events.php','annual-festivals.php']) ? 'active' : '' ?>">Events &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="current-events.php" class="<?= $currentPage == 'current-events.php' ? 'active' : '' ?>">Current Events</a></li>
        <li><a href="annual-festivals.php" class="<?= $currentPage == 'annual-festivals.php' ? 'active' : '' ?>">Annual Festivals</a></li>
      </ul>
    </li>

    <!-- Guided Tours -->
    <li class="dropdown">
      <a href="guided-tours.php" class="dropbtn <?= in_array($currentPage, ['guided-tours.php','walking-tours.php','carriage-rides.php','audio-tours.php']) ? 'active' : '' ?>">Guided Tours &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="walking-tours.php" class="<?= $currentPage == 'walking-tours.php' ? 'active' : '' ?>">Walking Tours</a></li>
        <li><a href="carriage-rides.php" class="<?= $currentPage == 'carriage-rides.php' ? 'active' : '' ?>">Carriage Rides</a></li>
        <li><a href="audio-tours.php" class="<?= $currentPage == 'audio-tours.php' ? 'active' : '' ?>">Audio Tours</a></li>
      </ul>
    </li>

    <!-- Travel -->
    <li class="dropdown">
      <a href="travel-tips.php" class="dropbtn <?= in_array($currentPage, ['travel-tips.php', 'ticket.php', 'registration.php']) ? 'active' : '' ?>">Travel &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="travel-tips.php" class="<?= $currentPage == 'travel-tips.php' ? 'active' : '' ?>">Travel Tips</a></li>
        <li><a href="ticket.php" class="<?= $currentPage == 'ticket.php' ? 'active' : '' ?>">Tickets</a></li>
        <li><a href="registration.php" class="<?= $currentPage == 'registration.php' ? 'active' : '' ?>">Registration</a></li>
      </ul>
    </li>

    <!-- Accommodations -->
    <li class="dropdown">
      <a href="accommodations.php" class="dropbtn <?= in_array($currentPage, ['accommodations.php','hotels.php','historic-inns.php','restaurants.php']) ? 'active' : '' ?>">Accommodations &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="hotels.php" class="<?= $currentPage == 'hotels.php' ? 'active' : '' ?>">Hotels</a></li>
        <li><a href="historic-inns.php" class="<?= $currentPage == 'historic-inns.php' ? 'active' : '' ?>">Historic Inns</a></li>
        <li><a href="restaurants.php" class="<?= $currentPage == 'restaurants.php' ? 'active' : '' ?>">Restaurants</a></li>
      </ul>
    </li>

  <!-- Support -->
  <li>
    <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact Us</a>
  </li>

  <!-- Login / My Account -->
  <?php if (isset($_SESSION['user_id'])): ?>
    <li class="dropdown">
      <a href="profile.php" class="dropbtn <?= $currentPage == 'profile.php' ? 'active' : '' ?>"><i class="fas fa-user"></i> My Account &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="profile.php" class="<?= $currentPage == 'profile.php' ? 'active' : '' ?>">Profile</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </li>
  <?php else: ?>
    <li><a href="login.php" class="<?= $currentPage == 'login.php' ? 'active' : '' ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
  <?php endif; ?>

  </ul>
</nav>

</header>

<?php
$pageTitle = "Search"; 
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section with Full-Screen Video -->
<section class="hero-section">
        <div class="hero-overlay">
            <h1>Search</h1>
        </div>
        <img src="assets/images/Search_Hero_Section.jpg" alt="Search" class="hero-image">
    </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.php">Home</a> &gt; <span>Search</span>
    </nav>

<main>
        <section class="search-results">
            <h1>Search Results</h1>
            <p>Showing results for: <strong><span id="search-query"></span></strong></p>
            <ul id="results-list">
                <!-- Search results will be populated here -->
            </ul>
        </section>
    
   
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>

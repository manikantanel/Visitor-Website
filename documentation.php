<?php
$pageTitle = "Grading Documentation - Extras";
require_once('assets/inc/header.inc.php');
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-overlay">
    <h1>Final Project – Grading Documentation</h1>
  </div>
  <img src="assets/images/Confirmation_Hero_Section.jpg" alt="Grading Documentation" class="hero-image">
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb">
  <a href="index.php">Home</a> &gt; <span>Grading</span>
</nav>

<main>
<div class="container attraction-detail">
  <h2>Look and Feel</h2>
  <p>The site is visually consistent and responsive across Chrome, Firefox, Safari, and Edge. Layouts adapt smoothly using media queries. Navigation is clear and mobile-friendly with a sticky header, dropdowns, and hamburger menu. CRAP principles are applied for professional and accessible design.</p>

  <p>To resolve midterm feedback regarding menu readability, I refined the navigation structure by reducing the number of top-level menu items. Ticket and Registration were moved under the Travel dropdown, and Login, My Account, and Logout are now properly organized under a login menu based on user session status. I also adjusted the media query breakpoint to <strong>1024px</strong>, ensuring that the navigation collapses into a hamburger menu before items like “Travel” span multiple lines. These changes maintain a cleaner, mobile-friendly layout across more screen sizes.</p>

  <p>To address midterm feedback, I updated the navigation by adding a semi-transparent black background and text shadow for better contrast over hero images. When scrolling, the header changes to a solid brown background for maximum readability. Smooth transitions for background color and shadow were added to enhance visual appearance.</p>

  <h2>Modular Site</h2>
  <p>I used PHP includes for header and footer across all pages to avoid repeated code. Each page has a unique &lt;title&gt; and an active link highlight using PHP and <code>$_SERVER['PHP_SELF']</code>. HTML5 semantic structure and session control are used site-wide.</p>

  <h2>JavaScript & DHTML</h2>
  <p>This site features fully original JavaScript components including an AJAX testimonial slider, accessibility widget, rotating travel tips, weather API widget, image viewer, countdown timer, animated hero slider, and a popup modal. All were built from scratch with plain JS—no libraries used.</p>

  <h2>Comment Form</h2>
  <p>The comment form includes extra fields like rating, image upload, location and recommendation. <code>submitCommentForm()</code> performs JS validation. On the backend, <code>insertcomment.inc.php</code> uses <code>htmlspecialchars()</code> and stores values securely using <code>prepare()</code>, <code>bind_param()</code>, and <code>execute()</code>. Adminer is used for viewing stored data.</p>

  <h2>Special Deals Access Control</h2>
  <p>I removed <code>special-deals.php</code> from global navigation and moved it inside <code>profile.php</code> (My Account) as a "View Offer" button, accessible only after login. This improves both UX and membership exclusivity. Additionally, a "View Current Offers" button appears inside the countdown box on <code>index.php</code> (homepage) to promote time-sensitive deals in a visible and engaging location.</p>

  <h2>Visual Enhancements</h2>
  <p>To improve both accessibility and design consistency, I applied several visual improvements across the site:</p>

  <div class="Page-extra-list">
      <ul>
        <li><strong>Card Overlay Gradient:</strong> I applied a <code>radial-gradient(rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.8))</code> to the <code>.card-overlay</code> element. This allows overlaid text to remain readable without obscuring the background image entirely, improving contrast and user focus.</li>

        <li><strong>Hero Slider Auto-Slide:</strong> The homepage hero image slider now automatically advances every 8 seconds using <code>setInterval()</code>. This keeps the content dynamic and engaging without requiring user input.</li>

        <li><strong>Image Hover Effects:</strong> I enhanced the <code>.large</code> and <code>.history-link</code> images with hover effects using a <code>::after</code> pseudo-element that overlays a radial gradient. A subtle zoom-in animation also provides a more interactive and accessible experience, especially in dark mode.</li>

        <li><strong>Modular Image Viewer:</strong> I improved the image viewer by updating the script to handle each <code>.gallery-grid</code> independently. Now, clicking an image or its figcaption correctly opens the selected image in the viewer, even when multiple galleries exist on the page. This improves modularity, accessibility, and user experience.</li>
      </ul>
  </div>


  <h2>Extras</h2>
  <div class="Page-extra-list">
    <ol class="extras-list">
      <li><strong>Active Highlight on Homepage Slider:</strong> Temporarily highlights the first visible card on slide transition using <code>.active-highlight</code> and <code>setTimeout()</code>.</li>
      <li><strong>Modular Image Viewer:</strong> Supports multiple gallery grids independently using scoped querySelectorAll logic.</li>
      <li><strong>Countdown Timer:</strong> Appears on homepage, revealing a deal button when the timer expires.</li>
      <li><strong>Global Weather Widget:</strong> Appears across all pages, showing live weather using OpenWeatherMap API with a collapsible mobile toggle.</li>
      <li><strong>Date Restriction Script:</strong> Blocks past dates in hotel and ticket booking forms and auto-adjusts checkout based on check-in.</li>
      <li><strong>Accessibility Widget:</strong> Offers dark mode toggle with <code>localStorage</code> and text magnifier on hover. Closes when clicking outside panel.</li>
      <li><strong>Confirmation Pages:</strong> Displays personalized success messages after form submissions for <code>contact</code>, <code>hotel booking</code>, <code>ticket booking</code>, and <code>registration</code>. Submitted data is stored securely in the database via Adminer. After confirmation, logged-in users can view their booking history and submission records on the <code>profile.php</code> page.</li>
      <li><strong>Tablet Layout Optimization:</strong> Adjusted <code>.card-subpage</code> layout to 2-column on 768px–1024px screens using media queries.</li>
      <li><strong>Animated Map Zoom:</strong> Google map gently zooms in on scroll using <code>transform: scale()</code> and <code>transition</code>.</li>
      <li><strong>Popup Modal:</strong> Displays once on first homepage load using <code>localStorage</code>. Dismisses manually.</li>
      <li><strong>Rotating Travel Tips:</strong> Updates tip text every 6 seconds on homepage using <code>setInterval()</code>.</li>
      <li><strong>Enhanced Comment Fields:</strong> Added rating slider, image upload, location input, and recommendation field—all validated in JS and stored in database.</li>
      <li><strong>Mobile User Icon with Session-Aware Navigation:</strong> Added a user icon (using <code>fas fa-user</code> or <code>fa-sign-in-alt</code>) to mobile screens next to the search icon. This icon conditionally links to either <code>profile.php</code> (if the user is logged in) or <code>login.php</code> (if not), based on the session state. It is styled to appear only on mobile using media queries and is hidden on desktop where a full navigation menu is already available. This improves mobile usability and provides quick access to account actions in a responsive and space-efficient way.</li>
      <li><strong>Login & Register System:</strong> Implemented a secure authentication system that allows users to register, log in, and access member-only features using a session-based login flow with logout. The registration form includes a show/hide password toggle (eye icon), a confirm password field, and real-time password strength validation. Passwords must be at least 8 characters long and contain an uppercase letter, lowercase letter, number, and symbol. The login form includes similar usability improvements, and alerts the user with a clear "Invalid, try again" message if incorrect username or password is entered. All input is validated client-side and securely processed on the backend using prepared statements.</li>
      <li><strong>Auto-Filled Form Fields Using Session Data:</strong>Updated multiple user-facing forms to improve convenience for logged-in users by auto-filling fields using PHP session variables. In <code>hotel.php</code>, <code>ticket.php</code>, <code>registration.php</code>, and <code>contact.php</code>, the <code>name</code> and <code>email</code> inputs are dynamically pre-filled using expressions like <code>&lt;?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?&gt;</code>. This reduces redundant typing, enhances user experience, and maintains consistency across authenticated pages.</li>
      <li><strong>AJAX Testimonial System:</strong> I built a full-featured testimonial system using native JavaScript and AJAX to handle real-time comment submissions. The form collects user name, email, location, rating (via slider), optional image URL, and comment. Submitted data is securely stored using <code>insertcomment.inc.php</code> with prepared statements. A confirmation overlay displays the submitted content, including the user’s profile image (uploaded or a default fallback), star rating, and comment details. The testimonial slider dynamically refreshes every 20 seconds using <code>getUsers()</code>, which fetches a live JSON list from <code>getcomments.inc.php</code>. Testimonials are rendered dynamically into a responsive rotating slider, complete with profile images, navigation dots, and auto-scrolling functionality—all without reloading the page.</li>
      <li><strong>Clean Data & XSS Protection Implementation:</strong> 
        I implemented a complete clean data pipeline to secure user-submitted content across HTML, JavaScript, and PHP. This includes:
        <ul>
          <li>HTML5 validation using <code>type</code>, <code>required</code>, and regex patterns</li>
          <li>JavaScript validation with <code>submitCommentForm()</code> and a custom <code>escapeHTML()</code> function to safely render data in the DOM</li>
          <li>PHP sanitization using <code>htmlspecialchars()</code>, <code>filter_var()</code>, and <code>trim()</code> in <code>insertcomment.inc.php</code></li>
          <li>Prepared statements (<code>prepare()</code>, <code>bind_param()</code>, <code>execute()</code>) to prevent SQL injection</li>
          <li>Secure JSON response handling and manual testing using simulated XSS payloads (e.g., <code>&lt;script&gt;alert("XSS")&lt;/script&gt;</code>)</li>
        </ul>
        This demonstrates a comprehensive and secure approach to handling user-generated content and protecting the system against cross-site scripting attacks.
        </li>
      </ol>
  </div>
  </div>
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>

<?php 
require_once('assets/inc/db_connect.inc.php');
require_once('assets/inc/header.inc.php');

if (isset($_SESSION['error'])): ?>
    <script>
      alert("<?= addslashes($_SESSION['error']) ?>");
    </script>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
  <script>
    alert("<?= addslashes($_SESSION['success']) ?>");
  </script>
  <?php unset($_SESSION['success']); ?>
<?php endif; ?>
?>


<!-- Hero Section -->
<section class="hero-section">
      <div class="hero-overlay">
          <h1>Login</h1>
      </div>
      <img src="assets/images/Login_Hero_Section.jpg" alt="Historic Williamsburg" class="hero-image">
  </section>


    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="login.php">Login</a>
    </nav>

<main>
    <section id="booking-form" class="booking-section">
        <div class="booking-header">
            <h2>User Login</h2>
            <p>Please enter your username and password to access your account.</p>
        </div>

        <div class="booking-form">
        <form action="login_process.php<?php echo isset($_GET['redirect']) ? '?redirect=' . urlencode($_GET['redirect']) : ''; ?>" method="post" onsubmit="return validateLoginForm();">



            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>

            <label for="password">Password:</label>
            <div class="password-wrapper">
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <i class="fas fa-eye toggle-password" onclick="togglePassword('password', this)"></i>
            </div>

            <input type="submit" value="Login">
        </form>
            <div class="form-note">
                <p>
                    Don't have an account? 
                    <a href="register.php">Register here</a>
                </p>
                <p>
                    Forgot Password or Username? 
                    <a href="contact.php">Contact Support</a>
                </p>
            </div>
        </div>
    
    </section>

 
  <!-- Back to Top Link -->
  <a href="#main-header" class="back-to-top">Back to Top</a>
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>

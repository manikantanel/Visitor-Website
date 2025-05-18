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
    <section class="booking-section">
    <div class="booking-header">
        <h2>User Registration</h2>
        <p>Create your account to access special deals, book tickets, and leave comments!</p>
    </div>

    <div class="booking-form">
            <form action="register_process.php" method="post" onsubmit="return validatePasswords();">

                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Choose a Username" required>

                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>

                <label for="password">Password:</label>
                <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Create a Password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword('password', this)"></i>
                </div>

                <label for="confirm_password">Confirm Password:</label>
                <div class="password-wrapper">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter Password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword('confirm_password', this)"></i>
                </div>


                <input type="submit" value="Register">
            </form>
            <div class="form-note">
                <p>
                Already have an account? 
                <a href="login.php">Login here</a>
                </p>
            </div>
        </div>
    </section>
</main>

<?php require_once('assets/inc/footer.inc.php'); ?>

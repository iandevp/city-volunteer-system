<?php
session_start();

if (isset($_SESSION['popup'])) {
    $message = $_SESSION['popup'];
    echo "<script>alert('" . addslashes($message) . "');</script>";
    unset($_SESSION['popup']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Volunteer Login</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <div class="login-container">
    <form action="../api/login_user.php" method="POST" class="login-form">
      <h2>Volunteer Login</h2>
      <p>Hey, enter your details to get to sign in to your account</p>

      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Enter username" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Enter password" required>

      <a href="#">Forgot your password?</a>

      <button type="submit">Sign in</button>

      <p>Don't have an account? <a href="register.php">Sign up now</a></p>
    </form>
  </div>

    <!-- Help Button (bottom right corner) -->
    <a href="help.php" class="help-button" title="Need Help?">
    <span>Need Help?</span>
  </a>
</body>
</html>

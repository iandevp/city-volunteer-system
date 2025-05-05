<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Volunteer Registration</title>
  <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
  <form id="multiStepForm" method="POST" action="register_submit.php">
    <!-- Step 1 -->
    <!-- Add logo at top-left -->
<img src="../assets/images/logoName.png" alt="Logo" style="position: absolute; top: 40px; left: 50px; width: 150px;">

<!-- Step 1 -->
<div class="form-step active">
  <div class="step-indicator">
    <div class="step active">1</div>
    <div class="line"></div>
    <div class="step">2</div>
    <div class="line"></div>
    <div class="step">3</div>
  </div>

  <h2>Get Started</h2>
  <p>Create your account now</p>

  <div class="form-grid">
    <div>
      <label for="full_name">Full Name</label>
      <input type="text" name="full_name" placeholder="Enter full name" required>

      <label for="email">Email Address</label>
      <input type="email" name="email" placeholder="Enter email address" required>

      <label for="contact">Contact Number</label>
      <input type="text" name="contact" placeholder="Enter contact number" required>
    </div>

    <div>
      <label for="address">Address</label>
      <input type="text" name="address" placeholder="Enter address" required>

      <label for="city">City to volunteer</label>
      <select name="city" required>
        <option value="">Select a city</option>
        <option value="City 1">City 1</option>
        <option value="City 2">City 2</option>
      </select>

      <label for="skills">Skill & Interests</label>
      <select name="skills" required>
        <option value="">Select a skill & interest</option>
        <option value="Teaching">Teaching</option>
        <option value="First Aid">First Aid</option>
      </select>
    </div>
  </div>

  <div style="text-align: right; margin-top: 20px;">
    <button type="button" class="next-btn">→</button>
  </div>
</div>


    <!-- Step 2 -->
    <div class="form-step">
      <h2>You almost done!</h2>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Re-enter Password" required>
      <div class="buttons">
        <button type="button" class="prev-btn">Back</button>
        <button type="submit" class="submit-btn">Submit</button>
      </div>
    </div>
  </form>

  <script src="../js/register.js"></script>
</body>
</html>

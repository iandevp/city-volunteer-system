<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Volunteer Registration</title>
  <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>

  <!-- Volunteer Registration Form -->
  <form id="multiStepForm" method="POST" action="register_submit.php">
    
    <!-- Centered Logo -->
    <div style="text-align: center; margin-bottom: 20px;">
      <img src="../assets/images/logoName.png" alt="Logo" style="width: 150px;">
    </div>

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
      <div class="step-indicator">
        <div class="step completed">1</div>
        <div class="line active"></div>
        <div class="step active">2</div>
        <div class="line"></div>
        <div class="step">3</div>
      </div>

      <h2>You’re almost done!</h2>
      <p>Create your account now</p>

      <label for="username">Username</label>
      <input type="text" name="username" placeholder="Enter username" required>

      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Enter password" required>

      <label for="confirm_password">Re-enter Password</label>
      <input type="password" name="confirm_password" placeholder="Enter confirmation password" required>

      <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
        <button type="button" class="prev-btn">←</button>
        <button type="button" class="next-btn">→</button>
      </div>
    </div>

<!-- Step 3 -->
<div class="form-step">
  <div class="step-indicator">
    <div class="step completed">1</div>
    <div class="line active"></div>
    <div class="step completed">2</div>
    <div class="line active"></div>
    <div class="step active">3</div>
  </div>

  <h2>Terms & Conditions</h2>
  <p>By signing up as a volunteer, you agree to comply with the following terms and conditions. Please read them carefully.</p>

  <div class="terms-box">
    <p><strong>Volunteer Responsibilities</strong><br>
    Volunteers must provide accurate and complete information during registration.<br>
    Volunteers agree to participate in assigned activities in a responsible and ethical manner.<br>
    Any misconduct or failure to comply with assigned responsibilities may result in temporary or permanent <br>
    suspension from the system.

    <p><strong>Data Privacy & Security</strong><br>
    Personal information collected will only be used for volunteer coordination purposes.<br>
    We will not share, sell, or disclose your information to third parties without your consent.<br>
    Volunteers have the right to request updates or deletions of their data at any time.<br>
    </p>

    <p><strong>Task Assignments & Participation</strong><br>
    Volunteers are responsible for checking task assignments and attending scheduled activities.<br>
    If unable to attend, volunteers should inform the administrator in advance.<br>
    The system reserves the right to reassign volunteers based on availability and project needs.<br>
    </p>

    <p><strong>Code of Conduct</strong><br>
    Volunteers must treat all individuals with respect and refrain from any form of discrimination, harassment, <br>
    or inappropriate behavior.<br>
    Any violation of this policy may result in removal from the platform.<br>
    </p>

    <p><strong>System Usage & Restrictions</strong><br>
    Volunteers must not misuse the system or engage in unauthorized activities.<br>
    We will not share, sell, or disclose your information to third parties without your consent.<br>
    Volunteers have the right to request updates or deletions of their data at any time.<br>
    </p>
  </div>

  <label class="checkbox-wrapper">
    <input type="checkbox" id="agreeCheckbox">
    <span>By registering as a volunteer, you agree to these terms and conditions. If you have any concerns, contact our support team for clarification.</span>
  </label>

  <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
    <button type="button" class="prev-btn">←</button>
    <button type="submit" class="submit-btn" id="submitBtn" disabled>→</button>
  </div>
</div>

<!-- Step 4: Registration Success -->
<div class="form-step">
  <div class="step-indicator">
    <div class="step completed">1</div>
    <div class="line active"></div>
    <div class="step completed">2</div>
    <div class="line active"></div>
    <div class="step completed">3</div>
  </div>

  <div class="success-container">
    <img src="../assets/images/successIcon.png" alt="Success Icon" class="success-icon">

    <p class="success-message">
      You have been<br>
      successfully registered<br>
      your account!
    </p>

    <button type="button" class="login-btn" onclick="window.location.href='login.php'">
      Go to login
    </button>
  </div>
</div>

  </form>

  <!-- Help Button (bottom right corner) -->
  <a href="help.php" class="help-button" title="Need Help?">
    <span>Need Help?</span>
  </a>

  <script src="../js/register.js"></script>
</body>
</html>

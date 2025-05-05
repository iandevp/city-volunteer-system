<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm_password'];

  if ($password !== $confirm) {
    echo "Passwords do not match!";
    exit();
  }

  // Hash password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Insert user
  $stmt = $conn->prepare("INSERT INTO volunteers (fullname, username, email, password) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $fullname, $username, $email, $hashedPassword);

  if ($stmt->execute()) {
    echo "Registration successful! <a href='../users/login.php'>Login here</a>";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>

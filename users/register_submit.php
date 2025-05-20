<?php
session_start();

// Connect to database
$conn = new mysqli('localhost', 'root', '', 'city-volunteer-system');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize POST data
$full_name = trim($_POST['full_name']);
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$address = trim($_POST['address']);
$baranggay = trim($_POST['baranggay']);
$skills = trim($_POST['skills']);
$username = trim($_POST['username']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    $_SESSION['popup'] = 'Passwords do not match.';
    header("Location: register.php");
    exit;
}

// Check if email or username already exists
$check_query = "SELECT id FROM volunteers WHERE email = ? OR username = ?";
$stmt = $conn->prepare($check_query);
$stmt->bind_param("ss", $email, $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $_SESSION['popup'] = 'Registration denied: Email or Username already exists.';
    header("Location: register.php");
    exit;
}

$stmt->close();

// Hash the password and insert
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$insert = $conn->prepare("INSERT INTO volunteers (full_name, email, contact, address, baranggay, skills, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$insert->bind_param("ssssssss", $full_name, $email, $contact, $address, $baranggay, $skills, $username, $hashed_password);

if ($insert->execute()) {
    $_SESSION['popup'] = '✅ Registration successful!';
    header("Location: login.php");
    exit;
} else {
    $_SESSION['popup'] = 'Registration failed. Please try again.';
    header("Location: login.php");
    exit;
}
?>

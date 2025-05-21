<?php
session_start();
require_once '../includes/db.php'; // adjust path if needed

// Sanitize input
$username = trim($_POST['username']);
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT id, full_name, email, password FROM volunteers WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        // Login successful - set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['full_name'];
        $_SESSION['user_email'] = $user['email'];
        
        header("Location: ../users/dashboard.php");
        exit;
    } else {
        $_SESSION['popup'] = 'Incorrect password.';
        header("Location: ../users/login.php");
        exit;
    }
} else {
    $_SESSION['popup'] = 'User not found.';
    header("Location: ../users/login.php");
    exit;
}
?>

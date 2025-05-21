<?php
session_start();
include_once '../includes/db.php';
include_once '../includes/header.php';

// Redirect if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get user info from session
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
</head>
<body>
    <!-- Sidebar -->
<div class="sidebar">
    <div class="logo-container">
        <img src="../assets/images/logo.png" class="logo">
        <img src="../assets/images/logoName.png" class="logo-Name">
    </div>

    <ul class="nav">
        <li class="nav-item active">
            <a href="dashboard.php" class="nav-link">
                <img src="../assets/images/logoDashboard.png" class="logo-NavBar">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="available-task.php" class="nav-link">
                <img src="../assets/images/logoAvailableTask.png" class="logo-NavBar">
                Available Task
            </a>
        </li>
        <li class="nav-item">
            <a href="my-contributions.php" class="nav-link">
                <img src="../assets/images/logoMyContributions.png" class="logo-NavBar">
                My Contributions
            </a>
        </li>
        <li class="nav-item">
            <a href="chat.php" class="nav-link">
                <img src="../assets/images/logoChat.png" class="logo-NavBar">
                Chat
            </a>
        </li>
    </ul>

    <div class="bottom-links">
        <a href="#"><img src="../assets/images/logoHelp.png" class="logo-NavBar"> Help</a>
        <a href="#"><img src="../assets/images/logoSettings.png" class="logo-NavBar"> Settings</a>
    </div>
</div>


    <div class="main-content">
        <div class="header">
            <div class="notification">
                <img src="../assets/images/logoNotification.png" class="logo-NavBar" alt="Notification Logo">
            </div>
            <div class="user-info">
                <div class="avatar">&#128100;</div>
                <div>
                    <strong><?= htmlspecialchars($user_name) ?></strong><br>
                    <small><?= htmlspecialchars($user_email) ?></small>
                </div>
            </div>
        </div>

        <div class="dashboard">
            <h2>Dashboard</h2>

            <div class="card">
                <h3>Events</h3>
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="event-placeholder"></div>
                <?php endfor; ?>
            </div>

            <div class="card">
                <h3>Upcoming events</h3>
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="event-placeholder"></div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</body>
</html>

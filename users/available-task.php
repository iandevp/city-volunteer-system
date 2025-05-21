<?php
// available-task.php
session_start();

// You should check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Sample user data
$user_name = $_SESSION['user_name'] ?? 'Ian Kirby Reyes';
$user_email = $_SESSION['user_email'] ?? 'kirby060304@gmail.com';

include_once '../includes/header.php'; // Optional if you have a shared header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Tasks</title>
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/available-task.css">
</head>
<body>
<div class="sidebar">
    <div class="logo-container">
        <img src="../assets/images/logo.png" class="logo">
        <img src="../assets/images/logoName.png" class="logo-Name">
    </div>
    <ul>
        <li><a href="dashboard.php" class="nav-link"><img src="../assets/images/logoDashboard.png" class="logo-NavBar"> Dashboard</a></li>
        <li class="active"><img src="../assets/images/logoAvailableTask.png" class="logo-NavBar"> Available Task</li>
        <li><a href="#" class="nav-link"><img src="../assets/images/logoMyContributions.png" class="logo-NavBar"> My Contributions</a></li>
        <li><a href="#" class="nav-link"><img src="../assets/images/logoChat.png" class="logo-NavBar"> Chat</a></li>
    </ul>
    <div class="bottom-links">
        <a href="#"><img src="../assets/images/logoHelp.png" class="logo-NavBar"> Help</a>
        <a href="#"><img src="../assets/images/logoSettings.png" class="logo-NavBar"> Settings</a>
    </div>
</div>

<div class="main-content">
    <div class="header">
        <div class="notification">
            <img src="../assets/images/logoNotification.png" class="logo-NavBar" alt="Notification">
        </div>
        <div class="user-info">
            <div class="avatar">&#128100;</div>
            <div>
                <strong><?= htmlspecialchars($user_name) ?></strong><br>
                <small><?= htmlspecialchars($user_email) ?></small>
            </div>
        </div>
    </div>

    <div class="available-tasks">
        <h2>Available Tasks</h2>

        <div class="task-card">
            <h3>Community Clean-Up Drive</h3>
            <p>Help clean streets and parks in your barangay. Join and make a difference!</p>
            <button class="join-btn">Join Task</button>
        </div>

        <div class="task-card">
            <h3>Tree Planting Activity</h3>
            <p>Plant trees with fellow volunteers to promote a greener city.</p>
            <button class="join-btn">Join Task</button>
        </div>

        <div class="task-card">
            <h3>Food Distribution Program</h3>
            <p>Assist in distributing food packs to underprivileged communities.</p>
            <button class="join-btn">Join Task</button>
        </div>
    </div>
</div>
</body>
</html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// if not logged in redirect to login.php
if (!isset($_SESSION['user_id']) && basename($_SERVER['PHP_SELF']) != 'login.php') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fontys ConnectICT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    <header>
        <div class="header-left">
            <h1>Fontys ConnectICT</h1>
        </div>

        <nav class="header-center">
            <a href="index.php">Dashboard</a>
            <a href="requests.php">Requests</a>
            <a href="leaderboard.php">Leaderboard</a>
        </nav>

        <div class="header-right">
            <span class="material-symbols-outlined">notifications</span>

            <a href="profile.php">
                <img src="https://i.pravatar.cc/150?img=11" alt="Profile" class="profile-pic">
            </a>

            <a href="logout.php">Logout</a>
        </div>
    </header>
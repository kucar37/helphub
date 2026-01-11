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
    <script src="/assets/js/main.js" defer></script>
</head>

<body>
    <header>
        <div class="header-left">
            <a href="index.php">
                <h1>Fontys ConnectICT</h1>
            </a>
        </div>

        <nav class="header-center">
            <a href="index.php">Dashboard</a>
            <a href="leaderboard.php">Leaderboard</a>
            <a href="profile.php">My Profile</a>

        </nav>

        <div class="header-right">
            <span class="material-symbols-outlined" style="cursor: pointer;">notifications</span>

            <div class="profile-dropdown-container">

                <div class="profile-trigger" onclick="toggleDropdown()">
                    <img src="https://i.pravatar.cc/150?u=<?= $_SESSION['user_id'] ?>" alt="Profile" class="profile-pic">
                </div>

                <div class="dropdown-menu" id="userMenu">
                    <div class="menu-header">
                        <strong><?= htmlspecialchars($_SESSION['full_name']) ?></strong>
                    </div>
                    <hr>
                    <a href="profile.php" class="menu-item">
                        <span class="material-symbols-outlined">person</span> My Profile
                    </a>
                    <a href="edit_profile.php" class="menu-item">
                        <span class="material-symbols-outlined">settings</span> Settings
                    </a>
                    <hr>
                    <a href="logout.php" class="menu-item danger">
                        <span class="material-symbols-outlined">logout</span> Logout
                    </a>
                </div>

            </div>
        </div>
    </header>
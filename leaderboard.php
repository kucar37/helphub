<?php
// Start session and check login
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Leaderboard - ConnectICT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <main class="dashboard-container" style="text-align: center; padding-top: 60px;">

        <div style="max-width: 600px; margin: 0 auto;">
            <span class="material-symbols-outlined" style="font-size: 64px; color: #663366;">emoji_events</span>
            <h1 style="color: #333; margin-top: 10px;">Leaderboard Coming Soon</h1>
        </div>

        <div style="margin-top: 40px; background: white; padding: 30px; border-radius: 12px; display: inline-block; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <p style="font-weight: bold; color: #663366; margin-bottom: 15px;">SCAN FOR SURVEY</p>

            <img src="assets/images/survey-qr.png" alt="Survey QR Code" style="width: 200px; height: 200px; object-fit: contain;">
        </div>

    </main>

    <script src="assets/js/main.js"></script>
</body>

</html>
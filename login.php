<?php
session_start();

include 'includes/db.php';

$error = '';

// check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // get user from db
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // verify password
    if ($user && password_verify($password, $user['password'])) {

        // save user info in the session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['is_logged_in'] = true;

        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - Fontys ConnectICT</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-layout">

    <div class="content-card login-card">
        <h2>Fontys ConnectICT - Login</h2>

        <?php if ($error): ?>
            <p class="error-message"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="form-group">
                <input type="email" name="email" class="form-input" placeholder="student@fontys.nl" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-purple-block">Sign In</button>
        </form>
    </div>

</body>

</html>
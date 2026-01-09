<?php
session_start();
include 'includes/db.php';
include 'includes/header.php';

$error = '';
$success = '';

// check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = trim($_POST['title']);
    $category = $_POST['category'];
    $description = trim($_POST['description']);
    $user_id = $_SESSION['user_id'];

    if (empty($title) || empty($description)) {
        $error = "Please fill in all fields.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO requests (user_id, title, category, description, created_at) VALUES (:uid, :title, :cat, :desc, NOW())");
        if ($stmt->execute(['uid' => $user_id, 'title' => $title, 'cat' => $category, 'desc' => $description])) {
            header("Location: index.php");
            exit;
        } else {
            $error = "Something went wrong. Try again.";
        }
    }
}
?>

<main class="dashboard-container">
    <div class="form-card-centered">
        <h2 class="section-title">Ask for Help</h2>
        <p class="text-gray" style="margin-bottom: 20px;">Describe your problem clearly so others can help you.</p>

        <?php if ($error): ?>
            <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="create_request.php">

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-input" placeholder="e.g. Stuck on React Hooks" required>
            </div>

            <div class="form-group">
                <label for="category" class="form-label">Category / Subject</label>
                <select id="category" name="category" class="form-input form-select">
                    <option value="Java">Java</option>
                    <option value="C#">C#</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Database">Database</option>
                    <option value="Design/Figma">Design/Figma</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-input form-textarea" rows="5" placeholder="Paste your error message or describe what you've tried..." required></textarea>
            </div>

            <div class="form-actions">
                <a href="index.php" class="btn-text">Cancel</a>
                <button type="submit" class="btn-primary">Post Request</button>
            </div>
        </form>
    </div>
</main>
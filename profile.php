<?php
include 'includes/db.php';
include 'includes/header.php';

$user_id = $_GET['id'] ?? $_SESSION['user_id'];

// prepare statement
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => $user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// check if user exists
if (!$user) {
    // maybe can redirect to 404.php later
    die("User not found!");
}
?>

<main class="dashboard-container">

    <div class="profile-header-card">
        <div class="profile-info">
            <div class="profile-avatar-container">
                <img src="https://i.pravatar.cc/150?u=<?= $user['id'] ?>" alt="User" class="profile-avatar-lg">
            </div>
            <div class="profile-text">
                <h1><?= htmlspecialchars($user['full_name']) ?></h1>
                <p><?= htmlspecialchars($user['study_program']) ?></p>
            </div>
        </div>

        <?php if ($_SESSION['user_id'] == $user['id']): ?>
            <a href="edit_profile.php" class="btn-purple icon-btn">
                <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
                Edit Profile
            </a>
        <?php endif; ?>
    </div>

    <div class="profile-grid-layout">

        <div class="left-stack">

            <div class="content-card">
                <h3>About Me</h3>
                <p class="bio-text">
                    <?= htmlspecialchars($user['bio'] ?? 'No bio yet.') ?>
                </p>
            </div>

            <div class="content-card">
                <h3>Reputation & Badges</h3>
                <div class="reputation-header">
                    <span>Reputation Level</span>
                    <span class="level-badge">Level 5</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-fill" style="width: 75%;"></div>
                </div>
                <p class="text-small">250 points to next level</p>

                <h4>Badges</h4>
                <div class="badge-row">
                    <span class="badge-icon">🏆</span>
                    <span class="badge-icon">💻</span>
                    <span class="badge-icon">👥</span>
                    <span class="badge-icon">⭐</span>
                </div>
            </div>

            <div class="content-card">
                <h3>Academic Details</h3>
                <div class="detail-row">
                    <span class="label">Student Number:</span>
                    <span class="value"><?= htmlspecialchars($user['student_number']) ?></span>
                </div>
                <div class="detail-row">
                    <span class="label">Semester:</span>
                    <span class="value"><?= htmlspecialchars($user['semester']) ?></span>
                </div>
                <div class="detail-row">
                    <span class="label">Start Year:</span>
                    <span class="value"><?= htmlspecialchars($user['start_year']) ?></span>
                </div>
            </div>

            <div class="content-card">
                <h3>Contact Information</h3>

                <div class="contact-row">
                    <span class="material-symbols-outlined icon-small">mail</span>
                    <a href="mailto:<?= htmlspecialchars($user['email']) ?>">
                        <?= htmlspecialchars($user['email']) ?>
                    </a>
                </div>

                <div class="contact-row">
                    <span class="material-symbols-outlined icon-small">link</span>
                    <a href="<?= htmlspecialchars($user['linkedin_url']) ?>" target="_blank">
                        linkedin.com/in/alexdoe
                    </a>
                </div>
            </div>

            <button class="btn-purple-block">
                <span class="material-symbols-outlined">ios_share</span>
                Export
            </button>
        </div>

        <div class="right-stack">

            <div class="content-card">
                <h3>Skills & Talents</h3>
                <p class="text-small text-gray">Add tags to showcase your skills to others.</p>
                <div class="tags-container">
                    <?php
                    if (!empty($user['skills'])) {
                        $skills_array = explode(',', $user['skills']);
                        foreach ($skills_array as $skill) {
                            echo '<span class="skill-tag">' . htmlspecialchars(trim($skill)) . '</span>';
                        }
                    } else {
                        echo '<span class="no-skills">No skills listed yet.</span>';
                    }
                    ?>
                </div>
            </div>

            <div class="content-card">
                <h3>Student Feedback</h3>
                <p class="text-small text-gray" style="margin-bottom: 20px;">Feedback from students you've helped.</p>

                <div class="feedback-item">
                    <img src="https://i.pravatar.cc/150?img=5" class="avatar-small">
                    <div class="feedback-content">
                        <div class="feedback-header">
                            <span class="name">Jane Smith</span>
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="project-ref">For "UI/UX feedback for personal project"</p>
                        <p class="quote">"Alex was incredibly helpful and gave very constructive feedback. Explained complex concepts in a simple way. Highly recommend!"</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h3>My Activity</h3>
                <div class="tab-menu">
                    <span class="tab active">My Help Requests</span>
                    <span class="tab">Helping With</span>
                </div>

                <div class="activity-row">
                    <div class="activity-main">
                        <h4>Help needed with Python data structures</h4>
                        <span class="date">Posted on 14 May 2024</span>
                    </div>
                    <span class="status-pill status-open">Open</span>
                </div>

                <div class="activity-row">
                    <div class="activity-main">
                        <h4>UI/UX feedback for personal project</h4>
                        <span class="date">Posted on 10 May 2024</span>
                    </div>
                    <span class="status-pill status-progress">In Progress</span>
                </div>
            </div>

        </div>
    </div>
</main>
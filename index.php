<?php
include 'includes/header.php';
include 'includes/db.php';

// etch requests from the database
$stmt = $pdo->query("
    SELECT r.*, u.full_name
    FROM requests r 
    JOIN users u ON r.user_id = u.id 
    ORDER BY r.created_at DESC 
    LIMIT 5
");

$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="dashboard-container">

    <div class="welcome-section">
        <h2 class="page-title">Welcome, Alex!</h2>
        <a href="create_request.php" class="btn-primary">Create New Request</a>
    </div>

    <div class="dashboard-grid">
        <div class="left-column">
            <h3 class="section-title">Latest Help Requests</h3>

            <?php if (count($requests) > 0): ?>
                <?php foreach ($requests as $req): ?>

                    <div class="request-card">
                        <div class="card-header">
                            <img src="https://i.pravatar.cc/150?u=<?= $req['user_id'] ?>" alt="User" class="user-avatar"> <span class="user-name">Posted by <?= htmlspecialchars($req['full_name']) ?></span>

                            <span class="text-small" style="color: #999; margin-left: auto;">
                                <?= date('M d', strtotime($req['created_at'])) ?>
                            </span>
                        </div>

                        <h4><?= htmlspecialchars($req['title']) ?></h4>

                        <p class="card-text">
                            <?= htmlspecialchars(substr($req['description'], 0, 150)) ?>...
                        </p>

                        <div class="card-footer">
                            <div class="tags">
                                <span class="tag"><?= htmlspecialchars($req['category']) ?></span>
                            </div>
                            <a href="request_details.php?id=<?= $req['id'] ?>" class="btn-small">View Details</a>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <div class="content-card" style="text-align: center; color: #666;">
                    <p>No help requests found yet.</p>
                    <p>Be the first to ask for help!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="right-column">
            <h3 class="section-title">My Activity</h3>
            <div class="sidebar-card">
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-details">
                            <span class="activity-name">Database Schema Help</span>
                            <span class="status-badge status-pending">Pending</span>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-details">
                            <span class="activity-name">React State Management</span>
                            <span class="status-badge status-progress">In Progress</span>
                        </div>
                    </li>
                </ul>
            </div>

            <h3 class="section-title mt-large">Notifications</h3>
            <div class="sidebar-card">
                <ul class="activity-list">
                    <li class="notification-item">
                        <span class="material-symbols-outlined icon-green">check_circle</span>
                        <p><strong>Jane Doe</strong> accepted your help.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</main>
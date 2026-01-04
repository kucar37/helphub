<?php
include 'includes/header.php';
?>

<main class="dashboard-container">

    <div class="welcome-section">
        <h2 class="page-title">Welcome, Alex!</h2>
        <a href="create-request.php" class="btn-primary">Create New Request</a>
    </div>

    <div class="dashboard-grid">
        <div class="left-column">
            <h3 class="section-title">Latest Help Requests</h3>

            <div class="request-card">
                <div class="card-header">
                    <img src="https://i.pravatar.cc/150?img=32" alt="User" class="user-avatar">
                    <span class="user-name">Posted by Jane Doe</span>
                </div>

                <h4>Java Project Help Needed</h4>
                <p class="card-text">I'm stuck on implementing the observer pattern for my final project. Need someone to review my code.</p>

                <div class="card-footer">
                    <div class="tags">
                        <span class="tag">Java</span>
                        <span class="tag">OOD</span>
                    </div>
                    <a href="#" class="btn-small">View Details</a>
                </div>
            </div>

            <div class="request-card">
                <div class="card-header">
                    <img src="https://i.pravatar.cc/150?img=12" alt="User" class="user-avatar">
                    <span class="user-name">Posted by John Smith</span>
                </div>

                <h4>UI/UX Feedback for Portfolio</h4>
                <p class="card-text">Looking for feedback on my new portfolio design. Is the user flow intuitive?</p>

                <div class="card-footer">
                    <div class="tags">
                        <span class="tag">UI/UX</span>
                        <span class="tag">Figma</span>
                    </div>
                    <a href="#" class="btn-small">View Details</a>
                </div>
            </div>

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
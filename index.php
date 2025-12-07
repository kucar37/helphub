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
            <h3>My Activity</h3>
        </div>
    </div>



</main>
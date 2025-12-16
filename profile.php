<?php include 'includes/header.php'; ?>

<main class="dashboard-container">

    <div class="profile-header-card">
        <div class="profile-info">
            <div class="profile-avatar-container">
                <img src="https://i.pravatar.cc/300?img=11" alt="Alex Doe" class="profile-avatar-lg">
            </div>
            <div class="profile-text">
                <h1>Alex Doe</h1>
                <p>ICT & Software Engineering</p>
            </div>
        </div>
        <a href="edit_profile.php" class="btn-purple icon-btn">
            <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
            Edit Profile
        </a>
    </div>

    <div class="profile-grid-layout">

        <div class="left-stack">

            <div class="content-card">
                <h3>About Me</h3>
                <p class="text-gray">Passionate ICT & Software Engineering student with a keen interest in front-end development and UI/UX design. I enjoy collaborating on projects and solving complex problems. Currently exploring Python for data analysis.</p>
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
                    <span class="value">1234567</span>
                </div>
                <div class="detail-row">
                    <span class="label">Semester:</span>
                    <span class="value">4</span>
                </div>
                <div class="detail-row">
                    <span class="label">Start Year:</span>
                    <span class="value">2022</span>
                </div>
            </div>

            <div class="content-card">
                <h3>Contact Information</h3>
                <div class="contact-row">
                    <span class="material-symbols-outlined icon-small">mail</span>
                    <a href="mailto:1234567@student.fontys.nl">1234567@student.fontys.nl</a>
                </div>
                <div class="contact-row">
                    <span class="material-symbols-outlined icon-small">link</span>
                    <a href="#">linkedin.com/in/alexdoe</a>
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
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">UI/UX Design</span>
                    <span class="skill-tag">Project Management</span>
                    <span class="skill-tag">Figma</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">HTML & CSS</span>
                    <span class="skill-tag">Teamwork</span>
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

                <div class="feedback-item">
                    <img src="https://i.pravatar.cc/150?img=12" class="avatar-small">
                    <div class="feedback-content">
                        <div class="feedback-header">
                            <span class="name">Michael B.</span>
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="project-ref">For "Help needed with Python data structures"</p>
                        <p class="quote">"A real Python wizard! Alex helped me understand dictionaries and lists much better. Saved my assignment!"</p>
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
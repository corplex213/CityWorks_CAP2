<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/Capstone Backup 12-31/Capstone/Capstone/public/assets/css/profile_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.1.0/firebase-firestore.js"></script>
</head>
<body>
    <!-- Header Template -->
    <div class="header">
        <a href="/public/Dashboard.html" class="logo">
            <img src="img/341835580_3377258052532133_4186880548703356922_n.jpg" alt="CEO">
        </a>
        <div class="header-right">
            <a href="Dashboard.html">Dashboard</a>
            <a class="active" href="#projects">Projects</a>
            <a href="Profile.html" class="logo">
                <img src="img/prof_pic.svg" alt="Profile">
            </a>
        </div>
    </div>

    <div class="profile-container">
        <h1>Profile</h1>
        <form class="profile-form">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" readonly>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" readonly>
            </div>
            <button type="submit" class="btn-submit">Save</button>
        </form>
        <button id="logoutButton">Log Out</button>
    </div>

    <div class="navigation-pane" id="navigationPane">
        <h2>Project List</h2>
        <ul id="projectList"></ul>
    </div>
    <script type = "module" src="/Capstone Backup 12-31/Capstone/Capstone/public/assets/javascript/profile_script.js"></script>
</body>
</html>
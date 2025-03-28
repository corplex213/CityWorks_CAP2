<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="/Capstone/public/assets/css/register_styles.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <section>
        <div class="login-box">
            <form id="registerForm">
                <h2>Register</h2>
                <div class="input-box">
                    <input type="text" id="firstName" required>
                    <label>First Name</label>
                </div>
                <div class="input-box">
                    <input type="text" id="lastName" required>
                    <label>Last Name</label>
                </div>
                <div class="input-box">
                    <input type="text" id="email-prefix" required>
                    <label>Email</label>
                    <span class="email-domain">@ceo.com</span>
                </div>
                <div class="input-box">
                    <input type="password" id="password" required>
                    <label>Password</label>
                    <span class="icon toggle-password" onclick="togglePassword('password')">
                        <ion-icon name="eye-outline"></ion-icon>
                    </span>
                </div>
                <div class="input-box">
                    <input type="password" id="confirmPassword" required>
                    <label>Confirm Password</label>
                    <span class="icon toggle-password" onclick="togglePassword('confirmPassword')">
                        <ion-icon name="eye-outline"></ion-icon>
                    </span>
                </div>
                <div class="input-box">
                    <select id="position" required>
                        <option value="" disabled selected>Choose Position</option>
                        <option value="manager">Manager</option>
                        <option value="staff">Staff</option>
                        <option value="staff">Admin</option>
                    </select>
                </div>
                <button type="submit">Register</button>
            </form>
            <div class="register-link">
                <p>Already have an account? <a href="index.html">Login</a></p>
            </div>
            <div id="register-error"></div>
        </div>
    </section>
    <script src="/Capstone/public/assets/javascript/register.js" type="module"></script>
</body>
</html>
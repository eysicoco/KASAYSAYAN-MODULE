<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../LOGIN1/login1-css.css">
    <title>PH KASAYSAYAN - Login</title>
</head>
<body>
    <div class="login-container">
    <h2>MABUHAY !</h2>
    <form id="loginForm" method="post">
        <!-- Your existing login form inputs here -->
        <input type="text" name="username" placeholder="Username" required>
        <div class="password-input">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <img class="eye" src="../PICS/close.png" onclick="togglePasswordVisibility()">
        </div>
        <!-- Moved the button inside the form -->
        <button type="button" class="forgot-password-btn">Forgot Password?</button>
        <input type="submit" value="Login">
    </form>
    <p><a href="..//HOME1/kasaysayan1.php">Continue as Guest</a></p>
    <p>No Account? <a href="..//SIGNUP1/Signup1.php">Signup here</a>.</p>
</div>

    <script src="../LOGIN1/loginjs.js"></script>
</body>
</html>
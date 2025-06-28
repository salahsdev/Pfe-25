<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, password FROM useer WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) {
                session_start();
                $_SESSION['user_id'] = $id;
                header("Location: index.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with that email.";
        }
        $stmt->close();
    } else {
        $error = "Please fill in all fields.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="container" id="signin-container">
        <div class="form-container">
            <h2>Sign In</h2>
            <?php if (isset($error)) { echo '<div class="error-message">' . htmlspecialchars($error) . '</div>'; } ?>
            <form id="signin-form" method="POST" action="login.php">
                <div class="input-group">
                    <label for="signin-email">Email</label>
                    <input type="email" id="signin-email" name="email" required>
                </div>
                
                <div class="input-group">
                    <label for="signin-password">Your password</label>
                    <div class="password-container">
                        <input type="password" id="signin-password" name="password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('signin-password')">
                            Hide
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">Log In</button>
                
                <div class="form-footer">
                    <p>By continuing, you agree to the <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a>.</p>
                </div>
                
                <div class="form-links">
                    <a href="#" onclick="showForgotPassword()">Forgot your password?</a>
                    <a href="#" onclick="showOtherOptions()">Other ways with sign in</a>
                </div>
            </form>
            
            <div class="switch-form">
                <p>New to our community</p>
                <a href="singUp.php" class="switch-btn">Create an account</a>
            </div>
        </div>
    </div>

</body>
</html>
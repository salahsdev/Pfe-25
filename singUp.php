<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = trim($_POST['first_name']);
    $last = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // server side validation
    if (!empty($first) && !empty($last) && !empty($email) && !empty($password)) {

        // check if email already exists
        $check = $conn->prepare("SELECT id FROM useer WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "Email already registered. Try logging in.";
        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO useer (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $first, $last, $email, $hashed_password);

            if ($stmt->execute()) {

                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
        $check->close();

    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="container" id="signup-container">
        <div class="form-container">
            <h2>Sign Up</h2>
            <form id="signup-form" method="POST" action="singUp.php">
                <div class="name-row">
                    <div class="input-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name" required>
                    </div>
                    <div class="input-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" name="email" required>
                </div>
                
                <div class="input-group">
                    <label for="signup-password">Your password</label>
                    <div class="password-container">
                        <input type="password" id="signup-password" name="password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('signup-password')">
                            Hide
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">Sign Up</button>
                
                <div class="form-footer">
                    <p>By continuing, you agree to the <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a>.</p>
                </div>
            </form>
            
            <div class="switch-form">
                <a href="login.php" class="switch-btn">Already have an account? Sign In</a>
            </div>
        </div>
    </div>

    <script src="signup.js"></script>
</body>
</html>
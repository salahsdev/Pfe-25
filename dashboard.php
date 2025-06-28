<?php
session_start();
include 'config.php';

// check if user is logged inn
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// get user saved cities
$stmt = $conn->prepare("SELECT city_name, city_page, saved_at FROM saved_cities WHERE user_id = ? ORDER BY saved_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$saved_cities = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// get user info
$user_stmt = $conn->prepare("SELECT first_name, last_name FROM useer WHERE id = ?");
$user_stmt->bind_param("i", $user_id);
$user_stmt->execute();
$user_result = $user_stmt->get_result();
$user_info = $user_result->fetch_assoc();
$user_stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard - SafarVista</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="logo">
                <img src="images/SafarVista.png" alt="SafarVista Logo" class="logo-img">
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php#destinations" class="nav-link">Destinations</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#things-to-do" class="nav-link">Things To Do</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="auth-section">
                <a href="dashboard.php" class="login-btn">Dashboard</a>
                <a href="logout.php" class="signup-btn">Logout</a>
            </div>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Welcome back, <?php echo htmlspecialchars($user_info['first_name']); ?>!</h1>
            <p>Here are your saved destinations</p>
        </div>

        <div class="saved-cities-section">
            <h2>My Saved Cities</h2>
            
            <?php if (empty($saved_cities)): ?>
                <div class="no-cities">
                    <p>You haven't saved any cities yet.</p>
                    <a href="index.php#destinations" class="explore-btn">Explore Destinations</a>
                </div>
            <?php else: ?>
                <div class="cities-grid">
                    <?php foreach ($saved_cities as $city): ?>
                        <div class="saved-city-card">
                            <div class="city-info">
                                <h3><?php echo htmlspecialchars($city['city_name']); ?></h3>
                                <p class="saved-date">Saved on <?php echo date('M j, Y', strtotime($city['saved_at'])); ?></p>
                            </div>
                            <div class="city-actions">
                                <a href="<?php echo htmlspecialchars($city['city_page']); ?>" class="visit-btn">Visit</a>
                                <button class="remove-btn" onclick="removeCity('<?php echo htmlspecialchars($city['city_name']); ?>')">Remove</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="dashboard.js"></script>
</body>
</html>

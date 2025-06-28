<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>safarvista</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="map.css">
    <link rel="stylesheet" href="quickfacts.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!--navbar-->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">
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
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="dashboard.php" class="login-btn">Dashboard</a>';
                    echo '<a href="logout.php" class="signup-btn">Logout</a>';
                } else {
                    echo '<a href="login.php" class="login-btn">Login</a>';
                    echo '<a href="singUp.php" class="signup-btn">Sign up</a>';
                }
                ?>
            </div>
        </div>
    </nav>

    <div class="travel-page-wrapper">
        <header class="travel-page-header">
            <a href="index.php" class="travel-back-button">< BACK</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <button class="save-city-btn" onclick="saveCity('Tokyo, Japan', 'tokyo.php')">Save City</button>
            <?php endif; ?>
        </header>

        <div class="travel-main-content">
            <h1 class="travel-page-title">Tokyo: Where Tomorrow Wears a Kimono of Light</h1>
            
            <div class="travel-recommendation-badge">
                <span class="travel-heart-filled">❤</span>
                <span>Recommended by 99% of travelers</span>
            </div>

            <div class="travel-images-container">
                <div class="travel-featured-image">
                    <img src="images/tokyo/tokyo.jpg" alt="Tokyo Tower">
                </div>
                <div class="travel-thumbnail-images">
                    <img src="images/tokyo/tokyo 2.jpg" alt="Shibuya Crossing">
                    <img src="images/tokyo/tokyo 3.jpg" alt="Senso-ji Temple">
                </div>
            </div>

            <section class="travel-about-content">
                <h2 class="travel-section-heading">About</h2>
                <p class="travel-text-paragraph">Tokyo isn't just a city — it's a paradox in motion, where silence and speed share the same breath.</p>
                <p class="travel-text-paragraph">You walk past neon lights that flicker like stars, and yet the air feels alive with whispers of the past.</p>
                <p class="travel-text-paragraph">Mopeds zip by temples that have stood for centuries, as laughter echoes off modern skyscrapers.</p>
                <p class="travel-text-paragraph">Mornings smell like fresh sushi and history; nights hum with the energy of a thousand dreams.</p>
                <p class="travel-text-paragraph">In Shibuya, the crosswalks pulse with life, each step a beat in the city's heart.</p>
                <p class="travel-text-paragraph">At Senso-ji, time pauses — just long enough for you to feel small and infinite.</p>
                <p class="travel-text-paragraph">It's a place that doesn't rush, because it's already seen forever.</p>
                <p class="travel-text-paragraph">And by the time you leave, part of you will want to stay behind — and belong.</p>
            </section>

            <div class="quick-facts-container">
                <div class="quick-facts-header">
                    <h2>Quick Facts</h2>
                    <div class="header-line"></div>
                </div>
                
                <div class="facts-grid">
                    <div class="facts-column">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <span>A</span>
                            </div>
                            <div class="fact-content">
                                <h3>Language</h3>
                                <p>Japanese & English</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <span>¥</span>
                            </div>
                            <div class="fact-content">
                                <h3>Currency</h3>
                                <p>Japanese Yen (JPY)</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Visa</h3>
                                <p>Tourist visa required for most countries</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-plug"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Power Plugs</h3>
                                <p>Type A / B</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="facts-column">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Religion</h3>
                                <p>Shintoism & Buddhism</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Airport</h3>
                                <p>Narita International (NRT)</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Climate</h3>
                                <p>Humid subtropical; hot summers & mild winters. Best time: March-May, Sept-Nov</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Apps</h3>
                                <p>Google Translate, Hyperdia, Tokyo Subway</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <h2 class="map-title">Tokyo, Japan</h2>
                <div id="tokyo-map" class="city-map"></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="city-save.js"></script>
    <script>
        // Initialize Tokyo map
        const tokyoMap = L.map('tokyo-map').setView([35.6762, 139.6503], 13);
        
        //  tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(tokyoMap);
        
        //  marker for Tokyo
        L.marker([35.6762, 139.6503])
            .addTo(tokyoMap)
            .bindPopup('<b>Tokyo, Japan</b><br>The Capital of Japan')
            .openPopup();
    </script>

    <style>
    .save-city-btn {
        background: #00bcd4;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    
    .save-city-btn:hover {
        background: #00acc1;
    }
    
    .save-city-btn:disabled {
        background: #28a745;
        cursor: not-allowed;
    }
    </style>

</body>
</html>

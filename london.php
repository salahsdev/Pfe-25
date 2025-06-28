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

            <!--Save Button (only if user is logged in)-->
            <?php if (isset($_SESSION['user_id'])): ?>
                <button class="save-city-btn" onclick="saveCity('London, UK', 'london.php')">Save City</button>
            <?php endif; ?>
        </header>

        <div class="travel-main-content">
            <h1 class="travel-page-title">London: Where History Meets Modern Majesty</h1>
            
            <div class="travel-recommendation-badge">
                <span class="travel-heart-filled">❤</span>
                <span>Recommended by 99% of travelers</span>
            </div>

            <div class="travel-images-container">
                <div class="travel-featured-image">
                    <img src="images/london/london.jpg" alt="London Eye">
                </div>
                <div class="travel-thumbnail-images">
                    <img src="images/london/london 2.jpg" alt="Big Ben">
                    <img src="images/london/london 3.jpg" alt="Tower Bridge">
                </div>
            </div>

            <section class="travel-about-content">
                <h2 class="travel-section-heading">About</h2>
                <p class="travel-text-paragraph">London isn't just a city — it's a living tapestry where every street tells a story.</p>
                <p class="travel-text-paragraph">You walk past red buses and black cabs, while Big Ben chimes the hours away.</p>
                <p class="travel-text-paragraph">Double-deckers navigate through centuries of history, as laughter echoes off ancient walls.</p>
                <p class="travel-text-paragraph">Mornings smell like fresh tea and tradition; nights hum with warm pub lights and conversation.</p>
                <p class="travel-text-paragraph">In Camden, the markets buzz with creative energy beneath your feet.</p>
                <p class="travel-text-paragraph">At the Tower Bridge, time pauses — just long enough for you to feel small and infinite.</p>
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
                                <p>English</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <span>£</span>
                            </div>
                            <div class="fact-content">
                                <h3>Currency</h3>
                                <p>British Pound (GBP)</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Visa</h3>
                                <p>EU citizens need passport, others check requirements</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-plug"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Power Plugs</h3>
                                <p>Type G</p>
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
                                <p>Christianity (Anglican)</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Airport</h3>
                                <p>Heathrow (LHR)</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Climate</h3>
                                <p>Temperate oceanic; mild summers & cool winters. Best time: May-September</p>
                            </div>
                        </div>
                        
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="fact-content">
                                <h3>Apps</h3>
                                <p>Uber, Citymapper, TfL Go</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <h2 class="map-title">London, UK</h2>
                <div id="london-map" class="city-map"></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="city-save.js"></script>
    <script>
        // Initialize London map
        const londonMap = L.map('london-map').setView([51.5074, -0.1278], 13);
        
        //  tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(londonMap);
        
        //  marker for London
        L.marker([51.5074, -0.1278])
            .addTo(londonMap)
            .bindPopup('<b>London, UK</b><br>The Capital of England')
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

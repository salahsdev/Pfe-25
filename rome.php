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
                    <a href="#destinations" class="nav-link">Destinations</a>
                </li>
                <li class="nav-item">
                    <a href="#things-to-do" class="nav-link">Things To Do</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="auth-section">
                <?php
                session_start();
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
                <button class="save-city-btn" onclick="saveCity('Rome, Italy', 'rome.php')">Save City</button>
            <?php endif; ?>
        </header>

        <div class="travel-main-content">
            <h1 class="travel-page-title">In the Heart of Rome: A Timeless Dance Between Empire and Everyday Life</h1>
            
            <div class="travel-recommendation-badge">
                <span class="travel-heart-filled">❤</span>
                <span>Recommended by 99% of travelers</span>
            </div>

            <div class="travel-images-container">
                <div class="travel-featured-image">
                    <img src="images/rome/rome.jpg" alt="Colosseum in Rome">
                </div>
                <div class="travel-thumbnail-images">
                    <img src="images/rome/rome 2.jpg" alt="Rome street">
                    <img src="images/rome/rome 3.jpg" alt="Spanish Steps">
                </div>
            </div>

            <section class="travel-about-content">
                <h2 class="travel-section-heading">About</h2>
                <p class="travel-text-paragraph">Rome isn't just a city — it's a living museum where every stone has a story.</p>
                <p class="travel-text-paragraph">You walk past ruins older than memory, and yet the air feels alive.</p>
                <p class="travel-text-paragraph">Mopeds zip by fountains sculpted for emperors, as laughter echoes off ancient walls.</p>
                <p class="travel-text-paragraph">Mornings smell like fresh espresso and history; nights hum with warm light and wine.</p>
                <p class="travel-text-paragraph">In Trastevere, the cobblestones dance beneath your feet.</p>
                <p class="travel-text-paragraph">Perfume was born here, but so was resistance. So was laughter echoing down narrow lanes of Altstadt, where every crooked window has seen both war and weddings.</p>
                <p class="travel-text-paragraph">It's a place that doesn't rush, because it's already seen forever.</p>
                <p class="travel-text-paragraph">And by the time you leave, part of you will want to stay behind and belong.</p>
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
                        <p>Italian & English</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <span>€</span>
                    </div>
                    <div class="fact-content">
                        <h3>Currency</h3>
                        <p>Euro (EUR)</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Visa</h3>
                        <p>EU citizens free access, others check requirements</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Power Plugs</h3>
                        <p>Type C / F / L</p>
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
                        <p>Roman Catholicism</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Airport</h3>
                        <p>Leonardo da Vinci (FCO)</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Climate</h3>
                        <p>Mediterranean; hot summers & mild winters. Best time: April-June, Sept-Oct</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Apps</h3>
                        <p>Uber, Citymapper, Roma Mobilità</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="map-container">
        <h2 class="map-title">Rome, Italy</h2>
        <div id="rome-map" class="city-map"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="city-save.js"></script>
    <script>
        // Initialize Rome map
        const romeMap = L.map('rome-map').setView([41.9028, 12.4964], 13);
        
        //  tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(romeMap);
        
        //  marker for Rome
        L.marker([41.9028, 12.4964])
            .addTo(romeMap)
            .bindPopup('<b>Rome, Italy</b><br>The Eternal City')
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

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
                <a href="login.php" class="login-btn" onclick="showSignIn()">Login</a>
                <a href="singUp.php" class="signup-btn" onclick="showSignUp()">Sign up</a>
            </div>
        </div>
    </nav>

    <div class="travel-page-wrapper">
        <header class="travel-page-header">
            <a href="index.php" class="travel-back-button">< BACK</a>
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

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Initialize Tokyo map
        const tokyoMap = L.map('tokyo-map').setView([35.6762, 139.6503], 13);
        
        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(tokyoMap);
        
        // Add marker for Tokyo
        L.marker([35.6762, 139.6503])
            .addTo(tokyoMap)
            .bindPopup('<b>Tokyo, Japan</b><br>The Capital of Japan')
            .openPopup();
    </script>

           <footer class="footer">
            <section id="contact">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-left">
                        <div class="logo">
                            <img style="height: 40px;" src="images/SafarVista.png" alt="Safar Vista Logo">
                        </div>
                        <p class="copyright">© 2021 All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="footer-text">
                            <h3>Travel Ideas where with you</h3>
                            <p>Just A man Exploring A Big Scary World<br>And Sharing It With You</p>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </footer>

</body>
</html>
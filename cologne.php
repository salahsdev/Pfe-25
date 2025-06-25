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
            <h1 class="travel-page-title">Cologne: A Cathedral City with a Beating Heart</h1>
            
            <div class="travel-recommendation-badge">
                <span class="travel-heart-filled">❤</span>
                <span>Recommended by 99% of travelers</span>
            </div>

            <div class="travel-images-container">
                <div class="travel-featured-image">
                    <img src="images/koln/koln.jpg" alt="Cologne Cathedral">
                </div>
                <div class="travel-thumbnail-images">
                    <img src="images/koln/koln 2.jpg" alt="Cologne Old Town">
                    <img src="images/koln/koln 3.jpg" alt="Cologne Rhine River">
                </div>
            </div>

            <section class="travel-about-content">
                <h2 class="travel-section-heading">About</h2>
                <p class="travel-text-paragraph">Cologne doesn’t introduce itself. It smiles, lets the cathedral do the talking.</p>
                <p class="travel-text-paragraph">The Dom rises like a hymn carved in stone, its spires needling the heavens, blackened by time, not age.</p>
                <p class="travel-text-paragraph">Here, history doesn’t wear velvet robes. It wears denim jackets, sips Kölsch from tall glasses, and rides bicycles along the Rhine with wind in its teeth.</p>
                <p class="travel-text-paragraph">Mornings smell like fresh espresso and history; nights hum with warm light and wine.</p>
                <p class="travel-text-paragraph">In Trastevere, the cobblestones dance beneath your feet.</p>
                <p class="travel-text-paragraph">At the Pantheon, time pauses — just long enough for you to feel small and infinite.</p>
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
                        <p>German & English</p>
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
                        <p>Type C / F</p>
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
                        <p>Christianity (Catholic & Protestant)</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Airport</h3>
                        <p>Cologne Bonn Airport (CGN)</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Climate</h3>
                        <p>Oceanic; mild summers & cool winters. Best time: May-September</p>
                    </div>
                </div>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="fact-content">
                        <h3>Apps</h3>
                        <p>DB Navigator, KVB mobil, Uber</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-container">
        <h2 class="map-title">Cologne, Germany</h2>
        <div id="cologne-map" class="city-map"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Initialize Cologne map
        const cologneMap = L.map('cologne-map').setView([50.9375, 6.9603], 13);
        
        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(cologneMap);
        
        // Add marker for Cologne
        L.marker([50.9375, 6.9603])
            .addTo(cologneMap)
            .bindPopup('<b>Cologne, Germany</b><br>Cathedral City on the Rhine')
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
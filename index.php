<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>safarvista</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="dashboard.php" class="login-btn">Dashboard</a>';
                    echo '<a href="logout.php" class="signup-btn">Logout</a>';
                } else {
                    echo '<a href="login.php" class="login-btn">Login</a>';
                    echo '<a href="singUp.php" class="signup-btn">Sign up</a>';
                }
                ?>
            </div>
            
    </nav>

    <main>
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-content">
                    <h1>Let Your Journey<br>Be as <span class="highlight">Stunning</span><br>as Your Destination</h1>
                    <p>Discover hidden treasures and unforgettable moments that transform every journey into a story worth telling. From breathtaking landscapes to vibrant cultures, we help you uncover the magic that makes every trip extraordinary.</p>
                    <button class="discover-btn">Discover More</button>
                </div>
                <div class="hero-images">
                    <img src="images/home/beach.jpg" alt="Nusa Penida" class="image-box top-left" />
                    <img src="images/home/japan.jpg" alt="Mount Fuji" class="image-box top-right" />
                    <img src="images/home/thailand.jpg" alt="Yangon" class="image-box bottom-left" />
                    <img src="images/home/mosque.jpg" alt="Istanbul" class="image-box bottom-right" />
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-arrow">↓</div>
            </div>
        </section>
        <section class="partners-section">
            <div class="partners-container">
                <img src="images/partners/axon-airlines.svg" alt="Axon Airlines" class="partner-logo small-logo">
                <img src="images/partners/jetstar-airways.svg" alt="Jetstar" class="partner-logo">
                <img src="images/partners/expedia.svg" alt="Expedia" class="partner-logo">
                <img src="images/partners/qantas-3.svg" alt="Qantas" class="partner-logo small-logo">
                <img src="images/partners/alitalia.svg" alt="Alitalia" class="partner-logo small-logo">
            </div>
        </section>
        <!-- Destinations (dynamic, keep design) -->
        <section id="destinations" class="destinations">
            <div class="container">
                <h1 class="title">Destinations</h1>
                <div class="destinations-grid">
                <div class="destination-card">
                    <div class="image-container">
                        <a href="rome.php">
                        <img src="images/rome/des-rome.jpg" alt="Rome Colosseum" class="destination-image">
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="destination-name">Rome, Italy</h3>
                        <div class="trip-info">
                            <span class="plane-icon">✈</span>
                            <span class="trip-duration">10 Days Trip</span>
                        </div>
                    </div>
                </div>
                
                <div class="destination-card">
                    <div class="image-container">
                        <a href="london.php">
                        <img src="images/london/des-london.png" alt="London Big Ben" class="destination-image">
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="destination-name">London, UK</h3>
                        <div class="trip-info">
                            <span class="plane-icon">✈</span>
                            <span class="trip-duration">12 Days Trip</span>
                        </div>
                    </div>
                </div>
                <div class="destination-card">
                    <div class="image-container">
                        <a href="tokyo.php">
                        <img src="images/tokyo/des-tokyo.jpg" alt="Tokyo Skyline" class="destination-image">
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="destination-name">Tokyo, Japan</h3>
                        <div class="trip-info">
                            <span class="plane-icon">✈</span>
                            <span class="trip-duration">14 Days Trip</span>
                        </div>
                    </div>
                </div>
                
                <div class="destination-card">
                    <div class="image-container">
                        <a href="cologne.php">
                        <img src="images/koln/des-koln.jpg" alt="Cologne Cathedral" class="destination-image">
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="destination-name">Cologne, Germany</h3>
                        <div class="trip-info">
                            <span class="plane-icon">✈</span>
                            <span class="trip-duration">10 Days Trip</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section id="things-to-do">
        <div class="container">
            <h1 class="main-title">Things To Do</h1>
            
            <div class="content-grid">
                <!-- Main Featured Article -->
                <div class="main-article">
                    <a href="articel-1.php" class="article-link">
                        <img src="images/home/couples.png" alt="Couple dining in Rome restaurant" class="main-image">
                        <div class="main-content">
                            <span class="category food-drinks">Hidden Gems</span>
                            <h2 class="main-headline">The Ultimate Rome Travel Guide: Must-See Places and Hidden Gems</h2>
                            <p class="excerpt">It seems that in Rome, almost any problem can be solved with a combination of pizza and spaghetti : after all, food, health, and...</p>
                        </div>
                    </a>
                </div>
    
                <!-- Side Articles -->
                <div class="side-articles">
                    <!-- Shopping Article -->
                    <div class="side-article">
                        <a href="articel-2.php" class="article-link">
                            <img src="images/home/shope.jpeg" alt="Shopping market interior" class="side-image">
                            <div class="side-content">
                                <span class="category shopping">Shopping</span>
                                <h3 class="side-headline">5 South London Markets You'll Love: Best Markets in South London</h3>
                            </div>
                        </a>
                    </div>
    
                    <!-- Hotels Article -->
                    <div class="side-article">
                        <a href="#" class="article-link">
                            <img src="images/home/hotels.jpeg" alt="Modern hotel building" class="side-image">
                            <div class="side-content">
                                <span class="category hotels">Hotels</span>
                                <h3 class="side-headline">15 South London Markets You'll Love: Best Markets in South London</h3>
                            </div>
                        </a>
                    </div>
    
                    <!-- Travel Budget Article -->
                    <div class="side-article">
                        <a href="#" class="article-link">
                            <img src="images/home/edc.jpeg" alt="Travel items including camera and passport" class="side-image">
                            <div class="side-content">
                                <span class="category travel-budget">Travel Budget</span>
                                <h3 class="side-headline">15 South London Markets You'll Love: Best Markets in South London</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section class="about-sectionn" id="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-image">
                        <img src="images/home/traveler.jpg" alt="Travel destination">
                    </div>
                    <div class="about-text">
                        <h2>Nice To Meet You</h2>
                        <p>I am Salah, a traveler sharing my journey with the world. Through every city, story, and soul I meet, I find meaning worth sharing.</p>
                        <p>This site is my journal full of tips, tales, and raw wanderlust. I hope it inspires you to step out, explore, and feel more alive. Let's chase horizons together one path, one dream at a time.</p>
                    </div>
                </div>
            </div>
        </section>
    
        
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

    </main>
</body>
</html>

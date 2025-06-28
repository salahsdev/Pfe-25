<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>safarvista</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="map.css">
    <link rel="stylesheet" href="articel.css">
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
                <a href="login.php" class="login-btn" onclick="showSignIn()">Login</a>
                <a href="singUp.php" class="signup-btn" onclick="showSignUp()">Sign up</a>
            </div>
    </nav>


        <div class="container">

           <div class="travel-page-wrapper">
        <header class="travel-page-header">
            <a href="index.php" class="travel-back-button">< BACK</a>
        </header>

        <header>
            <h1>The Ultimate Rome Travel Guide: Must-See Places and Hidden Gems</h1>
        </header>

        <div class="hero-image">
            <img src="images/articels/rome-articel/romeeee.jpg" alt="Roman Forum with ancient ruins and columns">
        </div>

        <div class="description">
            <p>Top 10 best things to do in Rome Italy, sightseeing and all must-see sites, tourist attractions, famous museums, Roman monuments, travel guide and historic landmarks. What to do highlights and best attractions to see in Rome?</p>
        </div>

        <section class="places-section">
            <h2>Places You Should Visit</h2>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/rome-articel/colisee_rome.jpg" alt="Colosseum exterior view">
                </div>
                <div class="place-content">
                    <h3>1. Places to visit: Colosseum</h3>
                    <p>The number 1 attraction of Rome is the Colosseum; the large amphitheatre that housed 65,000 spectators in Roman days. Gladiators battled each other as well wild animals in the Colosseum's arena, which is considered one of the seven modern wonders of the world. In the giant 'ruins' of the Colosseum, you can visit the stands, the arena and the underground areas of this largest Roman amphitheatre.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/rome-articel/fontana_di_trevi_rome.jpg" alt="Trevi Fountain with baroque architecture">
                </div>
                <div class="place-content">
                    <h3>2.Trevi Fountain of Rome</h3>
                    <p>The most famous fountain in the capital of Italy and perhaps even the world must be the 'Fontana di Trevi', or Trevi Fountain. This baroque fountain, located on the Piazza di Trevi, was built in the 18th century and a must see of the list of <strong>best things to do in Rome</strong>. The landmark and monument displays the god of the sea Neptune on his chariot.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/rome-articel/pantheon_rome.jpg" alt="Trevi Fountain with baroque architecture">
                </div>
                <div class="place-content">
                    <h3>3. Must see: Pantheon</h3>
                    <p>One of the best maintained buildings from Roman times is the Pantheon. What function the building had in those days is still not clear, but the Pantheon was given to the pope by emperor Hadrian in 608. The current church has several unique funerary monuments (painter Raphael and a few Italian kings), as well as a remarkably large and open dome (oculus). Since a while you need to buy tickets to visit the Roman Pantheon.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/rome-articel/basilique-saint-pierre-rome.jpg" alt="Trevi Fountain with baroque architecture">
                </div>
                <div class="place-content">
                    <h3>4.St. Peter’s Basilica</h3>
                    <p>Start with the heart of it all: St. Peter’s Basilica—a towering symbol of the Catholic Church and resting place of Saint Peter himself. This vast and sacred space houses wonders like Michelangelo’s Pietà and Bernini’s magnificent baldachin. Beneath, you’ll find the crypts with over 140 papal tombs. It’s one of the most awe-inspiring sites in the world—just be sure to book in advance, or prepare for a long wait.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/rome-articel/chapelle_sixtine.jpg" alt="Trevi Fountain with baroque architecture">
                </div>
                <div class="place-content">
                    <h3>5. Basilica di San Clemente al Laterano</h3>
                    <p>The basilica, dedicated to pope Clement I, is not one of the most impressive churches of Roma at a first glance of its interior. What makes this Basilica of San Clemente special is that multiple church buildings were built on top of each other over the centuries. During your visit, you will have the opportunity to get to know the history of the church through excavations of a 4th-century church, a secret church from the 1st century and Roman foundations.</p>
                </div>
            </div>

            <div class="map-container">
    <h2 class="map-title">Rome, Italy</h2>
    <div id="rome-map" class="city-map"></div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>

    //  Rome map
    const romeMap = L.map('rome-map').setView([41.9028, 12.4964], 13);
    
    // tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(romeMap);
    
    // marker for Colosseum
    L.marker([41.8902, 12.4922])
        .addTo(romeMap)
        .bindPopup('<b>Colosseum</b><br>Ancient amphitheatre and one of the seven modern wonders');
    
    // marker for Trevi Fountain
    L.marker([41.9009, 12.4833])
        .addTo(romeMap)
        .bindPopup('<b>Trevi Fountain</b><br>Famous baroque fountain with Neptune statue');
    
    //  marker for Pantheon
    L.marker([41.8986, 12.4769])
        .addTo(romeMap)
        .bindPopup('<b>Pantheon</b><br>Best preserved Roman building with remarkable dome');
    
    // marker for St. Peter's Basilica
    L.marker([41.9022, 12.4539])
        .addTo(romeMap)
        .bindPopup('<b>St. Peter\'s Basilica</b><br>Heart of Vatican City and Catholic Church');
    
    //  marker for Basilica di San Clemente al Laterano
    L.marker([41.8874, 12.4972])
        .addTo(romeMap)
        .bindPopup('<b>Basilica di San Clemente al Laterano</b><br>Multi-layered church with ancient excavations');
</script>



        </section>
    </div>
</body>
</html>
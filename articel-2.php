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
            <h1>5 South London Markets You'll Love: Best Markets in South London</h1>
        </header>

        <div class="hero-image">
            <img src="images/articels/london-articel/south.jpg" alt="Bustling South London market scene with colorful stalls, diverse crowds shopping and socializing, fresh produce and street food vendors, set against a backdrop of historic brick buildings on a lively sunny day">
        </div>

        <div class="description">
            <p>South London doesn’t whisper, it sings. Its markets are living, breathing symphonies of color, culture, and chaos. Whether you're chasing street food that melts in your mouth, vintage threads with a story, or the perfect plant for your window sill, South London's markets are where soul meets street.
                    <br>Here are five markets you'll fall in love with, and maybe never want to leave.</p>
        </div>

        <section class="places-section">

            <h2>Best Markets in South London</h2>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/london-articel/BrixtonVillage.jpg" alt="BrixtonVillage">
                </div>
                <div class="place-content">
                    <h3>1. Brixton Village & Market Row</h3>
                    <p>Brixton is more than a postcode, it’s poetry. Wander through Brixton Village and Market Row and you’ll find jerk chicken dancing with Italian pasta, vinyl shops next to vegan bakeries, and the scent of spice warming the tiled air. It’s community. It’s rhythm. And it’s impossible to walk through without tasting something that changes your day.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/london-articel/Peckham.jpg" alt="Peckham Levels">
                </div>
                <div class="place-content">
                    <h3>2. Peckham Levels & Rye Lane Market</h3>
                    <p>What was once a multi-story car park now houses art studios, street eats, and bars that look out over London’s skyline. Pair it with Rye Lane Market, where hair extensions, mangoes, incense, and knock-off designer belts all co-exist under one chaotic roof. Peckham is where cultures clash beautifully.</p>
                </div>
            </div>
            
            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/london-articel/Herne Hill Market.jpg" alt="Herne Hill Market">
                </div>
                <div class="place-content">
                    <h3>3. Herne Hill Market</h3>
                    <p>Herne Hill Market is a Sunday love letter to sustainability and local craft. Handmade candles, organic cheeses, seasonal veg, and sourdough still warm from the oven. The pace slows down here, and that’s the point. Bring a tote bag and leave with both your hands full and your heart lighter.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/london-articel/Tooting Market.avif" alt="Tooting Market">
                </div>
                <div class="place-content">
                    <h3>4. Tooting Market</h3>
                    <p>This undercover gem is as diverse as London gets. Latin American tacos, Nigerian jollof, Japanese gyoza, Caribbean patties, it’s a global feast tucked into an unassuming arcade. Tooting Market fuses the old with the bold. You’ll find vintage clothes, indie art, and bars buzzing with local life.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/london-articel/Greenwich Market.jpg" alt="Greenwich Market">
                </div>
                <div class="place-content">
                    <h3>5. Greenwich Market</h3>
                    <p>Step into cobbled lanes where time moves differently. Greenwich Market, nestled between maritime museums and royal parks, offers handmade crafts, antique oddities, and gourmet street food with a side of history. It’s a market that reminds you why markets matter, people, passion, and presence.</p>
                </div>
            </div>

            <div class="map-container">
    <h2 class="map-title">London, UK</h2>
    <div id="london-map" class="city-map"></div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="city-save.js"></script>
<script>
    // London map
    const londonMap = L.map('london-map').setView([51.5074, -0.1278], 12);
    
    // tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(londonMap);
    
    //  marker for Brixton Village & Market Row
    L.marker([51.4627, -0.1145])
        .addTo(londonMap)
        .bindPopup('<b>Brixton Village & Market Row</b><br>Vibrant covered markets with diverse food and shops');
    
    //  marker for Peckham Levels & Rye Lane Market
    L.marker([51.4739, -0.0693])
        .addTo(londonMap)
        .bindPopup('<b>Peckham Levels & Rye Lane Market</b><br>Multi-story creative space and bustling street market');
    
    //  marker for Herne Hill Market
    L.marker([51.4527, -0.1030])
        .addTo(londonMap)
        .bindPopup('<b>Herne Hill Market</b><br>Sunday farmers market with local produce and crafts');
    
    // marker for Tooting Market
    L.marker([51.4275, -0.1687])
        .addTo(londonMap)
        .bindPopup('<b>Tooting Market</b><br>Indoor market famous for authentic South Asian cuisine');
    
    // marker for Greenwich Market
    L.marker([51.4816, -0.0092])
        .addTo(londonMap)
        .bindPopup('<b>Greenwich Market</b><br>Historic covered market near the Royal Observatory');
</script>
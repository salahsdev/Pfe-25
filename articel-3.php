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

        <!-- Back button -->
           <div class="travel-page-wrapper">
        <header class="travel-page-header">
            <a href="index.php" class="travel-back-button">< BACK</a>
        </header>

        <!-- Header -->
        <header>
            <h1>Check In to Culture: Tokyo’s Top 5 Unique Hotels</h1>
        </header>

        <!-- Hero image -->
        <div class="hero-image">
            <img src="images/articels/tokyo-articel/hotels.jpg" alt="Modern hotel building">
        </div>

        <!-- Description -->
        <div class="description">
            <p>Tokyo, a city where the future hums through neon veins and tradition sits quietly in wooden corners. If you're seeking hotels that offer not just a place to sleep but a cultural experience, here are five of the best and most culturally rich hotels in Tokyo, where design, heritage, and atmosphere weave together like silk threads in a kimono..</p>
        </div>

        <!-- Places section -->
        <section class="places-section">

            <h2>Best Hotels in Tokyo </h2>
            <!-- Brixton Village & Market Row -->

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/tokyo-articel/Hoshinoya.jpeg" alt="BrixtonVillage">
                </div>
                <div class="place-content">
                    <h3>1. Hoshinoya Tokyo – Luxury Ryokan in the Sky</h3>
                    <p>Tokyo is a city where the future hums through neon veins and tradition sits quietly in wooden corners.
                            It’s a place where centuries-old rituals meet blinking lights and bullet trains.
                            If you're seeking hotels that offer not just a place to sleep but a cultural experience, this guide is for you.
                            These five stays embody more than comfort </p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/tokyo-articel/Shibuya Granbell Hotel.jpg" alt="Shibuya Granbell Hotel">
                </div>
                <div class="place-content">
                    <h3>2. Shibuya Granbell Hotel – Art Meets Urban Pulse</h3>
                    <p>Stylish and experimental, this hotel features rooms crafted by Japanese artists and architects.
                            Each space feels like a modern canvas, bold yet rooted in cultural identity.
                            Set just steps from the iconic Shibuya Crossing, the energy outside never truly sleeps.
                            Inside, however, creativity finds calm within curated design and thoughtful detail.
                            It reflects Tokyo’s unique balance of chaos and cool, tradition and transformation.</p>
                </div>
            </div>
            
            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/tokyo-articel/andon.avif" alt="Andon Ryokan">
                </div>
                <div class="place-content">
                    <h3>3. Andon Ryokan – Contemporary Craft & Community</h3>
                    <p>Andon is Tokyo’s first designer ryokan, where tradition meets modern artistry.
                            It offers a fresh take on hospitality, rooted in Japanese warmth and minimal elegance.
                            Contemporary art flows through its corridors, giving each corner a thoughtful presence.
                            Guests can take part in cultural workshops, learning tea ceremony, ikebana, or calligraphy.
                            More than a stay, it’s an intimate window into the rituals that shape Japanese life.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/tokyo-articel/park.jpg" alt="Park Hotel Tokyo – Where Every Room is a Canvat">
                </div>
                <div class="place-content">
                    <h3>4. Park Hotel Tokyo – Where Every Room is a Canvas</h3>
                    <p>Each room is a living gallery, uniquely decorated by Japanese artists.
                            Inspired by local aesthetics and ancient mythology, every space tells a story.
                            The design invites you to sleep inside a canvas painted with tradition and imagination.
                            Set in the heart of Shiodome, the hotel balances serenity with city energy.
                            It’s an ideal retreat for travelers who crave beauty, narrative, and sweeping skyline views.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/tokyo-articel/Ryumeikan.jpg" alt="Hotel Ryumeikan Tokyo – Elegance Rooted in Heritage">
                </div>
                <div class="place-content">
                    <h3>5. Hotel Ryumeikan Tokyo – Elegance Rooted in Heritage</h3>
                    <p>Dating back to 1899, this hotel carries the quiet dignity of old Tokyo.
                            It balances tradition and modern comfort with effortless, poetic grace.
                            Shoji doors slide open to calm interiors that honor heritage and simplicity.
                            Deep bathtubs invite slow moments in a city that rarely stops moving.
                            Here, the spirit of the past lives gently within the pulse of the present.</p>
                </div>
            </div>


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
            <h1>5 Ways Cologne Tells Its Story: A City of Faith, Art, and the Rhine</h1>
        </header>

        <div class="hero-image">
            <img src="images/articels/cologne-articel/cologne.jpg" alt="Cologne Cathedral">
        </div>

        <div class="description">
            <p>Cologne isn’t just a city. It’s a feeling wrapped in Gothic stone and kissed by the Rhine.
                    Here, past and present walk side by side. The ancient cathedral casts its shadow on modern art museums, and echoes of Roman walls hum beneath glass towers.</p>
        </div>

        <section class="places-section">

            <h2>Best Places to Visit in Cologne</h2>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/cologne-articel/Kölner.avif" alt="Kölner Dom">
                </div>
                <div class="place-content">
                    <h3>1. Kölner Dom (Cologne Cathedral)</h3>
                    <p>A marvel of Gothic ambition, this twin-spired titan took over 600 years to complete.
                            Stand beneath it, and you feel like time is holding its breath.
                            Inside? Stained glass like liquid fire and echoes of ancient prayers.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/cologne-articel/Love Locks.jpg" alt="Shibuya Granbell Hotel">
                </div>
                <div class="place-content">
                    <h3>2. Hohenzollern Bridge & Love Locks</h3>
                    <p>Steel and stone stretch across the Rhine like a heartbeat.
                             Couples fasten locks to its frame  each a vow, each a secret.
                            Cross it at sunset, when the cathedral glows golden in the river’s mirror.</p>
                </div>
            </div>
            
            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/cologne-articel/Museum Ludwig.jpg" alt="Andon Ryokan">
                </div>
                <div class="place-content">
                    <h3>3. Museum Ludwig</h3>
                    <p>Home to one of Europe’s finest collections of modern art, Museum Ludwig is where creativity breaks its chains and dares to speak in bold colors and strange forms.
                            Inside, Picasso’s brushstrokes twist like questions that never fully resolve. Warhol’s neon visions flicker like electric dreams in a sleepless city.
                            Every corner pulses with energy. Every canvas hums with rebellion.
                            It’s not just a museum. It’s a living conversation between artists and time</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/cologne-articel/Old Town.jpg" alt="Old Town (Altstadt)">
                </div>
                <div class="place-content">
                    <h3>4. Old Town (Altstadt)</h3>
                    <p>Cobblestone streets wind like memory through the heart of the city.
                            Pastel houses lean close together as if whispering secrets from centuries ago.
                            The scent of freshly poured Kölsch drifts from cozy beer halls where laughter rises with the steam of bratwurst.</p>
                </div>
            </div>

            <div class="place-item">
                <div class="place-image">
                    <img src="images/articels/cologne-articel/Kranhäuser.jpg" alt="Rheinauhafen & Kranhäuser">
                </div>
                <div class="place-content">
                    <h3>5. Rheinauhafen & Kranhäuser</h3>
                    <p>This is where Cologne reinvents itself without forgetting who it is.
                            At Rheinauhafen, history meets modern swagger in a dance of glass, steel, and imagination.
                            The crane-shaped buildings rise above the Rhine like futuristic giants, bold silhouettes against the sky.
                            They watch over old warehouses reborn as cafés, galleries, and creative spaces.</p>
                </div>
            </div>

<div class="map-container">
    <h2 class="map-title">Cologne, Germany</h2>
    <div id="cologne-map" class="city-map"></div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Initialize Cologne map
    const cologneMap = L.map('cologne-map').setView([50.9375, 6.9603], 12);
    
    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(cologneMap);
    
    // Add marker for Kölner Dom (Cologne Cathedral)
    L.marker([50.9413, 6.9583])
        .addTo(cologneMap)
        .bindPopup('<b>Kölner Dom (Cologne Cathedral)</b><br>Gothic masterpiece and UNESCO World Heritage Site');
    
    // Add marker for Hohenzollern Bridge
    L.marker([50.9417, 6.9661])
        .addTo(cologneMap)
        .bindPopup('<b>Hohenzollern Bridge</b><br>Famous bridge with love locks and cathedral views');
    
    // Add marker for Museum Ludwig
    L.marker([50.9406, 6.9599])
        .addTo(cologneMap)
        .bindPopup('<b>Museum Ludwig</b><br>Modern and contemporary art museum');
    
    // Add marker for Cologne Old Town (Altstadt)
    L.marker([50.9375, 6.9603])
        .addTo(cologneMap)
        .bindPopup('<b>Cologne Old Town (Altstadt)</b><br>Historic cobblestone streets and traditional brewhouses');
    
    // Add marker for Rheinauhafen & Kranhäuser
    L.marker([50.9264, 6.9683])
        .addTo(cologneMap)
        .bindPopup('<b>Rheinauhafen & Kranhäuser</b><br>Modern architectural district with crane-shaped buildings');
</script>

        </section>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Spots Finder</title>
    <link rel="stylesheet" href="/css/s1.css">
</head>
<body>
<?php include 'include/header.html'; ?>
    <!-- <header>
        <div class="logo">Tourism Finder</div>
        <nav>
            <ul>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Destinations</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header> -->

    <section class="hero">
        <div class="map-overlay">
            <h1>Discover Amazing Places</h1>
            <form action="search.php" method="get">
                <input type="text" name="location" placeholder="Enter a location">
                <button type="submit">Explore Now</button>
            </form>
        </div>
    </section>

    <section class="features">
        <div class="feature-item">Personalized Recommendations</div>
        <div class="feature-item">Local Guides</div>
        <div class="feature-item">Curated Experiences</div>
    </section>

    <section class="popular-destinations">
        <h2>Popular Destinations</h2>
        <div class="destination-grid">
            <div class="destination-item"><img src="front1.jpg" style="width:100%"></div>
            <div class="destination-item"><img src="front2.jpg" style="width:100%"></div>
            <div class="destination-item"><img src="front3.jpg" style="width:100%"></div>
        </div>
    </section>

    <footer>
        <div>© 2024 Tourism Finder</div>
        <div>Follow Us: [social icons]</div>
    </footer>
</body>
</html>

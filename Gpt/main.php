<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOYAGEVISTA</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>
        /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f8ff;
    color: #333;
}

h1, h2, h3 {
    font-family: 'Pacifico', cursive;
    color: #2b6cb0;
}

header, footer {
    background-color: #004d66;
    color: white;
    padding: 20px 0;
    text-align: center;
}

header .logo img {
    width: 50px;
    position: absolute;
    top: 10px;
    left: 30px;
}

.site-title {
    font-size: 40px;
    font-weight: bold;
    margin: 0;
    padding-bottom: 30px;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

nav ul li {
    margin: 0;
}

nav ul li a {
    text-decoration: none;
    color: #e0e0e0;
    font-size: 18px;
    font-weight: bold;
    padding: 10px 15px;
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
    border-radius: 8px;
}

nav ul li a:hover {
    background-color: #ffe600;
    color: #004d66;
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Logout button styling */
nav ul li.logout {
    margin-left: auto;
    position: absolute;
    right: 30px;
}

nav ul li.logout a {
    background-color: #ff4d4d;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
}

nav ul li.logout a:hover {
    background-color: #ff1a1a;
    transform: scale(1.05);
}

main {
    text-align: center;
    padding: 60px 20px;
}

/* Section Title Styles */
.section-title {
    font-size: 32px;
    font-family: 'Pacifico', cursive;
    color: #2b6cb0;
    margin-bottom: 20px;
}

/* Spots Section Styling */
.spots-section {
    margin: 40px 0;
}

.spot-container {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.spot {
    background-color: #e0f7fa;
    padding: 15px;
    border-radius: 10px;
    width: 250px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.spot img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

.spot p {
    font-size: 16px;
    color: #2c3e50;
}

/* Search Section Styles */
.search-section {
    margin-top: 50px;
}

.search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

.search-bar input {
    padding: 10px;
    font-size: 16px;
    border: 2px solid #2b6cb0;
    border-radius: 4px;
    width: 250px;
}

.search-bar select {
    padding: 10px;
    font-size: 16px;
    border: 2px solid #2b6cb0;
    border-radius: 4px;
    background-color: white;
}

.search-bar button {
    padding: 10px 15px;
    background-color: #2b6cb0;
    color: white;
    border: none;
    font-size: 16px;
    cursor: pointer;
}

.search-bar button:hover {
    background-color: #004d66;
}

/* Footer Styles */
footer {
    padding: 40px 50px;
    text-align: center;
    background-color: #004d66;
    color: white;
}

footer section {
    margin-bottom: 20px;
}

footer h3 {
    font-size: 22px;
    margin-bottom: 8px;
}

footer p {
    font-size: 16px;
}

footer .social-icons {
    margin-top: 15px;
}

footer .social-icons a {
    color: white;
    margin: 0 10px;
    font-size: 20px;
    transition: color 0.3s;
}

footer .social-icons a:hover {
    color: #ffe600;
}

footer p.copyright {
    font-size: 14px;
    margin-top: 20px;
}

     </style>
</head>
<body>
    <!-- Include Header -->
    <?php include 'include/header.html'; ?>

    <!-- Main Section -->
    <main>
        <!-- Top Spots Section -->
        <section class="spots-section">
            <h2 class="section-title">Top Spots</h2>
            <div class="spot-container">
                <div class="spot">
                    <img src="top-spot1.jpg" alt="Spot 1">
                    <p>Amazing beaches of Maldives</p>
                </div>
                <div class="spot">
                    <img src="top-spot2.jpg" alt="Spot 2">
                    <p>Exploring the Grand Canyon</p>
                </div>
                <div class="spot">
                    <img src="top-spot3.jpg" alt="Spot 3">
                    <p>Serenity in Santorini, Greece</p>
                </div>
            </div>
        </section>

        <!-- Favorites Section -->
        <section class="spots-section">
            <h2 class="section-title">Favorites</h2>
            <div class="spot-container">
                <div class="spot">
                    <img src="favorite-spot1.jpg" alt="Spot 1">
                    <p>The beauty of the Swiss Alps</p>
                </div>
                <div class="spot">
                    <img src="favorite-spot2.jpg" alt="Spot 2">
                    <p>Historical sites in Rome</p>
                </div>
                <div class="spot">
                    <img src="favorite-spot3.jpg" alt="Spot 3">
                    <p>Adventures in the Amazon Rainforest</p>
                </div>
            </div>
        </section>

        <!-- Trending Spots Section -->
        <section class="spots-section">
            <h2 class="section-title">Trending Spots</h2>
            <div class="spot-container">
                <div class="spot">
                    <img src="trending-spot1.jpg" alt="Spot 1">
                    <p>Hiking in Patagonia</p>
                </div>
                <div class="spot">
                    <img src="trending-spot2.jpg" alt="Spot 2">
                    <p>City lights of Tokyo</p>
                </div>
                <div class="spot">
                    <img src="trending-spot3.jpg" alt="Spot 3">
                    <p>Safari in Kenya</p>
                </div>
            </div>
        </section>

        <!-- Search Section -->
        <section class="search-section">
            <h2 class="section-title">Find Your Next Adventure</h2>
            <div class="search-bar">
                <input type="text" placeholder="Search destinations...">
                <select name="category" id="category-dropdown">
                    <option value="historical">Historical</option>
                    <option value="natural">Natural</option>
                    <option value="adventurous">Adventurous</option>
                    <option value="waterfalls">Waterfalls</option>
                    <option value="beaches">Beaches</option>
                    <option value="mountains">Mountains</option>
                    <option value="religious">Religious</option>
                    <option value="mythical">Mythical</option>
                </select>
                <button>Search</button>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include 'include/footer.html'; ?>
</body>
</html>

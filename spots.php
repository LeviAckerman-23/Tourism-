<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Spots</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header */
        header {
            background-color: #4CAF50;
            padding: 20px;
            color: white;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        /* Spots Section */
        .spots-container {
            padding: 50px;
            text-align: center;
        }

        .spot {
            background-color: white;
            margin-bottom: 30px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .spot img {
            width: 200px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .spot-description {
            flex: 1;
            text-align: left;
        }

        .spot-description h2 {
            margin: 0;
            color: #4CAF50;
        }

        .spot-description p {
            font-size: 1rem;
            color: #555;
        }

        /* Find Route Button */
        .find-route-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .find-route-btn:hover {
            background-color: #45a049;
        }

        /* Footer Section */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Explore Beautiful Spots</h1>
    </header>

    <!-- Available Spots Section -->
    <div class="spots-container">

        <!-- Spot 1 -->
        <div class="spot">
            <img src="https://via.placeholder.com/200x150" alt="Spot 1">
            <div class="spot-description">
                <h2>Sunny Beach</h2>
                <p>Sunny Beach is a beautiful destination with golden sands and crystal-clear waters. It's perfect for a relaxing getaway.</p>
            </div>
            <a href="https://maps.google.com" target="_blank" class="find-route-btn">Find Route</a>
        </div>

        <!-- Spot 2 -->
        <div class="spot">
            <img src="https://via.placeholder.com/200x150" alt="Spot 2">
            <div class="spot-description">
                <h2>Mountain Peak</h2>
                <p>Mountain Peak offers breathtaking views and is a perfect spot for hiking and adventure lovers.</p>
            </div>
            <a href="https://maps.google.com" target="_blank" class="find-route-btn">Find Route</a>
        </div>

        <!-- Spot 3 -->
        <div class="spot">
            <img src="https://via.placeholder.com/200x150" alt="Spot 3">
            <div class="spot-description">
                <h2>Historic City</h2>
                <p>Explore the rich history of this city, full of ancient landmarks, museums, and cultural sites.</p>
            </div>
            <a href="https://maps.google.com" target="_blank" class="find-route-btn">Find Route</a>
        </div>

    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Tourism Spot Finder</p>
        <p><a href="#">About Us</a> | <a href="#">Contact Us</a></p>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Spot Finder</title>
    <style>
        body {
            background: url('/images/front1.jpg') no-repeat;
             height: 100vh;
             background-size: 100% 100%;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:linear-gradient(to bottom right, #fff, #4CAF50); 
        }

        header {
            padding: 20px;
            color: white;
            text-align: center;
            position: relative;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        /* nav {
            margin-top: 10px;
        }

        nav a {
            margin: 0 15px;
            color: black;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.9s ease;
            font-weight: bold;
        }

        nav a:hover {
            background-color: lightslategrey;
            color: #000;
        }

        .signup-panel {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: black;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .signup-panel a {
            color: white;
            text-decoration: none;
        }

        .signup-panel a:hover {
            text-decoration: flex;
        } */

        .content {
            padding: 50px;
            text-align: center;
        }

        .image-gallery {
            display: flex;
            justify-content: space-around;
            margin-bottom: 50px;
        }

        .image-gallery img {
            width: 30%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }
        .image-gallery img:hover {
            transform: scale(1.05); 
        }

        .popular-destinations {
            text-align: center;
            margin-bottom: 50px;
        }

        .destination-blocks {
            display: flex;
            justify-content: space-around;
        }

        .destination-block {
            background-color: white;
            padding: 20px;
            width: 30%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .destination-block h3 {
            color: #4CAF50;
        }

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

        .container {
            width: 80%;
            margin: 0 auto;
            max-width: 1200px;
            margin-top: 30px;
        }

        .hero {
            text-align: center;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        .hero h2 {
            margin-bottom: 1rem;
        }

        .hero p {
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            color: #fff;
            background: #333;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background: #555;
        }

        .project-title {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 1.5rem;
        }

        .features {
            display: flex;
            justify-content: space-between;
        }

        .feature {
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
        }

        .feature h3 {
            margin-bottom: 0.5rem;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div class="project-title">
    <h1>VOYAGE VISTA</h1>
</div>

<div class="container">
    <section class="hero">
        <h2>Welcome to the Tourism Spots Finder</h2>
        <p>   
        <!-- Come and see what the definition of paradise is with a visit to Kerala. 
        This Indian state is relatively small in square mileage, but it boasts some of the most beautiful views in the world. 
        Canals, rivers, lakes and the shoreline make Kerala a place with many areas to bask by the water. 
        In fact, the Mangalam Dam Reservoir is particularly thrilling because of its view of the nearby mountains.
        The Western Ghats dominate the horizon above the reservoir, which makes this visit perfect for a picnic, good conversation or simple meditation. 
        With a handful of beaches to thrill nearly every traveler, Kerala offers many ways to enjoy the land, people and culture. -->
        Explore the best tourist spots in Kerala. From serene backwaters to lush hills, discover Kerala's beauty with ease and plan your next getaway.</p>
        <a href="signup.html" class="btn">Explore</a>
    </section>
    <section class="features">
        <div class="feature">
            <h3>Discover Best Destinations</h3>
            <p>Find and explore top-rated tourist spots in Kerala.</p>
        </div>
        <div class="feature">
            <h3>Easy Navigation</h3>
            <p>Get directions and navigate easily to your desired spots across Kerala.</p>
        </div>
        <div class="feature">
            <h3>Comprehensive Information</h3>
            <p>Access detailed information about Kerala's beautiful destinations.</p>
        </div>
    </section>
</div>

<div class="content">  
    <div class="image-gallery">
        <img src="images/index3.jpg" alt="Thekkady">
        <img src="images/index1.jpeg" alt="Munnar">
        <img src="images/index2.jpg" alt="Alleppey Backwaters">
    </div>

    <div class="popular-destinations">
        <h2>Popular Destinations in Kerala</h2>
        <div class="destination-blocks">
            <div class="destination-block">
                <h3>Munnar</h3>
                <p>Experience the serene beauty of Munnar's tea plantations and misty hills.</p>
            </div>
            <div class="destination-block">
                <h3>Alleppey Backwaters</h3>
                <p>Relax in the calm backwaters of Alleppey and enjoy houseboat cruises.</p>
            </div>
            <div class="destination-block">
                <h3>Kumarakom</h3>
                <p>Explore the tranquil backwaters and bird sanctuary at Kumarakom.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>Discover Kerala, God's Own Country</p>
    <p><a href="#">About Us</a> | <a href="#">Contact Us</a></p>
</footer>
</body>
</html>

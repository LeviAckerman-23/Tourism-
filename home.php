<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Spot Finder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            /* background-color:; */
            padding: 20px;
            color: white;
            text-align: center;
            position: relative;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            margin: 0 15px;
            color: black;
            text-decoration: none;
            font-size: 1.2rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .signup-panel {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: black;
            color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .signup-panel a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signup-panel a:hover {
            text-decoration: underline;
        }

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
    background: #e2e2e2;
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

    </style>
</head>
<body>
<div class="project-title">
        <h1>VOYAGE  VISTA</h1>
    </div>
    
    <header>
        <nav>
            <a href="Search.php">Explore</a>
            <a href="spots.php">Spots</a>
            <a href="#">Reviews</a>
            <a href="#">Feedback</a>
        </nav>
        <div class="signup-panel">
            <a href="#">Sign Up</a>
        </div>
    </header>

    <div class="container">
            <section class="hero">
                <h2>Welcome to Our Tourism Spots Finder</h2>
                <p>Explore the best tourist spots around the world with ease. Whether you're planning your next vacation or just curious about exciting destinations, our system provides comprehensive information and routes to help you on your journey.</p>
                <a href="signUp.php" class="btn">Get Started</a>
            </section>
            <section class="features">
                <div class="feature">
                    <h3>Discover Top Destinations</h3>
                    <p>Find and explore top-rated tourist spots worldwide.</p>
                </div>
                <div class="feature">
                    <h3>Easy Navigation</h3>
                    <p>Get directions and navigate easily to your desired spots.</p>
                </div>
                <div class="feature">
                    <h3>Comprehensive Information</h3>
                    <p>Access detailed information about various destinations.</p>
                </div>
            </section>
    </div>

    <div class="content">  
        <div class="image-gallery">
            <img src="https://tse1.mm.bing.net/th?id=OIP.2P9a13xKFGQ6DRu7Oz7mqgHaEh&pid=Api&P=0&h=180" alt="Tourism Image 1">
            <img src="https://tse3.mm.bing.net/th?id=OIP.-_Hyjda7hO1AsPNaKkbgIwHaE7&pid=Api&P=0&h=180" alt="Tourism Image 2">
            <img src="https://www.tripsavvy.com/thmb/TDEL-iGgG0q9AndoevOiG5j8t48=/2117x1417/filters:fill(auto,1)/GettyImages-158318929-596cca145f9b582c3577c6e4.jpg" alt="Tourism Image 3">
        </div>

        <div class="popular-destinations">
            <h2>Popular Destinations</h2>
            <div class="destination-blocks">
                <div class="destination-block">
                    <h3>Beach Paradise</h3>
                    <p>Discover the most stunning beaches with crystal clear waters.</p>
                </div>
                <div class="destination-block">
                    <h3>Mountain Getaways</h3>
                    <p>Explore scenic mountain ranges perfect for hiking and nature lovers.</p>
                </div>
                <div class="destination-block">
                    <h3>Historic Cities</h3>
                    <p>Step back in time and visit some of the world's most iconic historic cities.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p> Still in Progress..</p>
        <p><a href="#">About Us</a> | <a href="#">Contact Us</a></p>
    </footer>
</body>
</html>

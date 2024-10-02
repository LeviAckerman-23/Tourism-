<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOYAGEVISTA</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
     <style>
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

.section-title {
    font-size: 32px;
    font-family: 'Pacifico', cursive;
    color: #2b6cb0;
    margin-bottom: 20px;
}

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

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.contain{
  background: rgb(68,241,114);
  background: linear-gradient(305deg, rgba(68,241,114,1) 30%, rgba(1,106,160,1) 82%); 
  width: 98.9vw;
  height: 56vh;
  margin: -138px 0px;
}
.contain .heading h2{
  text-align: center;
  position: relative;
  padding-bottom: 10px;
  border-bottom: 2px solid #000;
  top: 17px;
}
.contain .box{
  overflow: hidden;
  width: 320px;
  height: 270px;
  margin: 28px;
  box-sizing: border-box;
  display: inline-block;
  transition: transform 2s;
}
.contain .box .imgBox{
  overflow: hidden;
}
.contain .box .imgBox img{
  max-width: 100%;
  height: 300px;
  transition: transform 2s;
}
.contain .box:hover .imgBox img{
  overflow: hidden;
  transform: scale(1.2);
}
.contain .destination-btn a{
  position: relative;
  text-decoration: none;
  border: 1px solid #fff;
  border-radius: 10px;
  padding: 5px 9px;
  color: #fff;
  margin-left: 47.5%;
  top: -19px;
  transition: 0.6s ease;
}
.contain a:hover{
  background-color: #fff;
  color: #000;
}
.about{
  position: relative;
  background-color: #8224e0;
  top: 118px;
  width: 98.9vw;
  height: 27vh;
}
.about h2{
  position: relative;
  text-align: center;
  color: white;
  top: 0px;
  padding: 2px;
  border: 3px solid black;
}
.contain .box .name-text{
  position: absolute;
  top: 870px;
  color: white;
  font-family: Helvetica;
}
.contain .box .left1{
  left: 130px;
}
.contain .box .name-text h2{
  margin-top: 50px;
  text-align: center;
  transition: 0.6s ease;
}
.contain .box .name-text a{
  position: relative;
  display: none;
  border: 1px solid #fff;
  padding: 5px 9px;
  top: -5px;
  color: #fff;
  text-decoration: none;
  transition: 0.6s ease;
  text-align: center;
}
.contain .box:hover .name-text h2{
  margin-top: 5px;
}
.contain .box:hover .name-text a{
  top: 15px;
  display: block;
}
.contain .box .name-text a:hover{
  background-color: #fff;
  color: #000;
}
.contain .box .left2{
  left: 530px;
}
.contain .box .left3{
  left: 920px;
}
.contain .box .left4{
  left: 1310px;
}


     </style> 
</head>
<body>
   
    <?php include 'include/header.html'; ?>

    <main>
      
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

        <!-- <section class="spots-section">
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
        </section> -->
      <section class="spots-section">
       <div class="contain"> 
      <div class="heading">
        <h2>Popular Destination in India</h2>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//tajmahal1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left1">
          <h2>Taj Mahal</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//ladakh1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left2">
          <h2>Ladakh</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//kerala1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left3">
          <h2>Kerala</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBox">
          <img src="images//destination//goa1.jpg" alt="Taj Mahal Image" style="width: auto;height: 270px;">
        </div>
        <div class="name-text left4">
          <h2>Goa</h2>
          <a href="destination.php" class="btn">Visit</a>
        </div>
      </div>
      <div class="destination-btn">
        <a href="destination.php">View all</a>
      </div>
     </div>
       </section>

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

    <?php include 'include/footer.html'; ?>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
</body>
</html>

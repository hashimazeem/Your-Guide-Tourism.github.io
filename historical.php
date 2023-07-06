<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Style sheet -->

    <link rel="stylesheet" href="css/style1.css" />
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" href="lib/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" />
    <!-- Font_Awesome -->
<style>
    .blue{
        margin-right:5px;
        color:aqua;
    }
    .txt-nav{
        font-size:20px;
        color:white;
    }
</style>
    <link rel="stylesheet" href="lib/fontawesome-6.2.1/css/all.min.css" />
    <title>Your Guide Tourism</title>
</head>

<body>
    <!-- Header section -->
    <?php
    include "nav.php";
   ?>
    <section class="home" id="home">
        <div class="image" data-aos="fade-down">
            <img src="img/32.png" alt="" />
        </div>

        <div class="content" data-aos="fade-up">
            <h2>adventure is worthwhile</h2>
            <p>
                Outdoor Adventure Can Essentially Function Like An Extreme Meditation
                Cushion, Teaching Not Only Concentration, But Also Inquiry,
                Compassion, And Right Action, Says Adventurer Renée Sharp.!
            </p>
        </div>
    </section>

    
    <div class="banner">

        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span>start your adventures</span>
            <h3>Let's Explore This World</h3>
            <h1>Popular Historical places in Pakistan that you can visit</h1>
        </div>
    
    </div>

    <section class="desert">
        <div class="video-container">
            <video src="img/Hiran minar.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Hiran Minar Park</h2>
            <p>Hiran Minar is an early 16th-century Mughal era complex located in Sheikhupura, in the Pakistani province of Punjab. The complex was built at the site of a game reserve in honour of Mughal Emperor Jahangir's beloved antelope named Mansraj.</p>
                <h1>Address: PXV4+64V, Hiran Minar Park Rd, Sheikhupura, Punjab</h1>
               <h1>Architectural style: Mughal architecture</h1>
               <a href="user-registration.php" class="btn">Book now</a>
               <a href="hiran.php" class="btn">Services</a>
        </div>
    </section>
    <section class="desert">
        <!-- Carousel -->
        <div class="video-container">
            <video src="img/Noor mahal.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Noor Mahal</h2>
            <p>The Noor Mahal is a Pakistan Army-owned palace in Bahawalpur, Punjab, Pakistan. It was built in 1872 like an Italian chateau on neoclassical lines, at a time when modernism had set in. It belonged to the Nawabs of Bahawalpur princely state, during British Raj.</p>
              <h1>Address: 9MH9+H5M, Bahawalpur Cantt, Bahawalpur, Punjab/h1>  
              <h1>Construction started: 1872</h1>
              <h1>Architectural style: Italian chateau on neoclassical lines</h1>
              <a href="user-registration.php" class="btn">Book now</a>
              <a href="Noor.php" class="btn">Services</a>
        </div>
    </section>
    <section class="desert">
        <!-- Carousel -->
        <div class="video-container">
            <video src="img/Harapa.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Harappa</h2>
            <p>Harappa is an archaeological site in Punjab, Pakistan, about 24 km west of Sahiwal. The Bronze Age Harappan civilisation, now more often called the Indus Valley Civilisation, is named after the site, which takes its name from a modern village near the former course of the Ravi River, which now runs 8 km to the north.</p>
            <h1>Weather: 26°C, Wind SE at 11 km/h, 56% Humidity</h1>
           <h1>Location: Sahiwal District, Punjab, Pakistan</h1> 
           <a href="user-registration.php" class="btn">Book now</a>
           <a href="Harappa.php" class="btn">Services</a>
        </div>
    </section>
    <section class="desert">
        <!-- Carousel -->
        <div class="video-container">
            <video src="img/lahore fort.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Lahore Fort</h2>
            <p>The Lahore Fort is a citadel in the city of Lahore, Pakistan. The fortress is located at the northern end of walled city Lahore, and spreads over an area greater than 20 hectares. It contains 21 notable monuments, some of which date to the era of Emperor Akbar.</p>
            <h1>Located in: Greater Iqbal Park</h1>
            <h1>Address: H8Q7+56P, Fort Rd, Walled City of Lahore, Lahore, Punjab</h1>
            <a href="user-registration.php" class="btn">Book now</a>
            <a href="lahore.php" class="btn">Services</a>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> murree </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> islamabad </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> lahore </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> multan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> bahawalpur </a>
            </div>
            <div class="box" data-aos="fade-up">
                <h3>quick links</h3>
                <a href="index.html"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="weather.php"> <i class="fas fa-chevron-right"></i> weather </a>
                <a href="blog.php"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>
            <div class="box" data-aos="fade-up">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +92 320 5726089 </a>
                <a href="#"> <i class="fas fa-phone"></i> +92 301 5383667 </a>
                <a href="#"> <i class="fas fa-phone"></i> +92 333 5305692 </a>
                <!-- <a href="#">
                    <i class="fas fa-envelop"></i> 
                </a> -->
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Lahore, Punjab </a>
            </div>
            <div class="box" data-aos="fade-up">
                <h3>follow us</h3>
                <a href="https://www.facebook.com">
                    <i class="fab fa-facebook-f"></i> facebook
                </a>
                <a href="https://www.twitter.com">
                    <i class="fab fa-twitter"></i> twitter
                </a>
                <a href="https://www.instagram.com">
                    <i class="fab fa-instagram"></i> instagram
                </a>
                <a href="https://www.linkedin.com">
                    <i class="fab fa-linkedin"></i> linkedin
                </a>
                <a href="https://www.pinterest.com">
                    <i class="fab fa-pinterest"></i> pinterest
                </a>
            </div>
        </div>
        <div class="credit">
            created by <span>.Hashim Azeem, Malik Bahlol, Zaineb Rashid.</span>
        </div>
    </section>
</body>

</html>
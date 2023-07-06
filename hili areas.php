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

    <link
      rel="stylesheet"
      href="lib/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css"
    />
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
        <h1>Popular Hilli Areas in Pakistan that you can visit</h1>
      </div>
    </div>

    <section class="desert">
      <div class="video-container">
        <video src="img/Murree.mp4" muted autoplay loop class="video"></video>
      </div>
      <div class="content">
        <h2>Murree</h2>
        <p>
          Murree is a mountain resort city, located in the Galyat region of the
          Pir Panjal Range, within the Murree District of Punjab, Pakistan. It
          forms the outskirts of the Islamabad-Rawalpindi metropolitan area, and
          is about 30 km northeast of Islamabad. It has average altitude of
          2,291 metres
        </p>
        <h1>Elevation: 2,291 m</h1>
        <h1>Province: Punjab</h1>
        <a href="user-registration.php" class="btn">Book now</a>
        <a href="murree.php" class="btn">Services</a>
      </div>
    </section>
    <section class="desert">
      <!-- Carousel -->
      <div class="video-container">
        <video src="img/Sakardu.mp4" muted autoplay loop class="video"></video>
      </div>
      <div class="content">
        <h2>Skardu</h2>
        <p>
          Skardu is a city located in Gilgit−Baltistan, Pakistan. Skardu serves
          as the capital of Skardu District and the Baltistan Division. It is
          situated at an elevation of nearly 2,500 metres in the Skardu Valley,
          at the confluence of the Indus and Shigar Rivers.
        </p>
        <h1>Elevation: 2,228 m</h1>
        <h1>Area: 77 km²</h1>
        <h1>Weather: 6°C, Wind E at 5 km/h, 76% Humidity More on</h1>
        <a href="user-registration.php" class="btn">Book now</a>
        <a href="skardu.php" class="btn">Services</a>
      </div>
    </section>
    <section class="desert">
      <!-- Carousel -->
      <div class="video-container">
        <video src="img/Swatt.mp4" muted autoplay loop class="video"></video>
      </div>
      <div class="content">
        <h2>Swat</h2>
        <p>
          Swat District is a district in the Malakand Division of Khyber
          Pakhtunkhwa, Pakistan. With a population of 2,309,570 per the 2017
          national census, Swat is the 15th-largest district of Khyber
          Pakhtunkhwa province.
        </p>
        <h1>Area: 5,337 km²</h1>
        <h1>Province: Khyber Pakhtunkhwa</h1>
        <a href="user-registration.php" class="btn">Book now</a>
        <a href="swat.php" class="btn">Services</a>
      </div>
    </section>
    <section class="desert">
      <!-- Carousel -->
      <div class="video-container">
        <video
          src="img/Hunza valley.mp4"
          muted
          autoplay
          loop
          class="video"
        ></video>
      </div>
      <div class="content">
        <h2>Hunza Valley</h2>
        <p>
          The Hunza Valley is a mountainous valley in the northern part of the
          Gilgit-Baltistan region of Pakistan, formed by the Hunza River,
          bordering Ishkoman to the northwest, Shigar to the southeast,
          Afghanistan's Wakhan Corridor to the north, and the Xinjiang region of
          China to the northeast
        </p>
        <h1>Area: 11,660 km2 (4,500 sq mi)</h1>
        <h1>English translation: Hunza Dish</h1>
        <a href="user-registration.php" class="btn">Book now</a>
        <a href="Hunza Valley.php" class="btn">Services</a>
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

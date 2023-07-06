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

    <link rel="stylesheet" href="lib/fontawesome-6.2.1/css/all.min.css" />
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
            <h1>Popular deserts in Pakistan that you can visit</h1>
        </div>
    </div>

    <section class="desert">
        <div class="video-container">
            <video src="img/Cholistan desert.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Cholistan Desert</h2>
            <p>
                The Cholistan Desert, also locally known as Rohi, is a desert in the
                southern part of Punjab, Pakistan that forms part of the Greater Thar
                Desert, which extends to Sindh province and the Indian state of
                Rajasthan. It is one of two large deserts in Punjab.
            </p>
            <h1>Location: Punjab, Rajasthan</h1>
            <h1>Coordinates: 28°30′N 70°00′E﻿ / ﻿28.5°N 70°E</h1>
            <a href="user-registration.php" class="btn">Book now</a>
            <a href="cholistan.php" class="btn">Services</a>
        </div>
    </section>
    <section class="desert">
        <!-- Carousel -->
        <div class="video-container">
            <video src="img/Thar desert.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Thal desert</h2>
            <p>
                The Thal desert is situated at 31°10’ N and 71°30’ E in the province
                of Punjab, Pakistan. Located near the Pothohar Plateau, the area falls
                under the Indomalayan biogeographic realm and stretches
            </p>
            <h1>Area: 10,000 km2 (3,900 sq mi)</h1>
            <h1>District: M.Garh&Layyah</h1>
            <h1>
                Coordinates: 31°10′N 71°30′E﻿ / ﻿31.167°N 71.500°E Coordinates:
                31°10′N 71°30′E﻿ / ﻿31.167°N 71.500°E
            </h1>
            <a href="user-registration.php" class="btn">Book now</a>
            <a href="thal.php" class="btn">Services</a>
        </div>
    </section>
    <section class="desert">
        <!-- Carousel -->
        <div class="video-container">
            <video src="img/Katpana Desert.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>Katpana Desert</h2>
            <p>
                The Katpana Desert or Cold Desert is a high-altitude desert located
                near Skardu, Gilgit-Baltistan, Pakistan. The desert contains large
                sand dunes that are sometimes covered in snow during the winters.
                Situated at an elevation of 2,226 metres above sea level, the Katpana
                Cold Desert is the highest deserts in the world.
            </p>
            <h1>Address: K2 Resort, Katpana, Skardu, 16100</h1>
            <h1>Floor elevation: 2,226 m (7,303 ft)</h1>
            <a href="user-registration.php" class="btn">Book now</a>
            <a href="cold desert.php" class="btn">Services</a>
        </div>
    </section>
    <section class="desert">
        <!-- Carousel -->
        <div class="video-container">
            <video src="img/Thal desert.mp4" muted autoplay loop class="video"></video>
        </div>
        <div class="content">
            <h2>thar Desert</h2>
            <p>
                The Thar Desert, also known as the Great Indian Desert, is an arid
                region in the north-western part of the Indian subcontinent that
                covers an area of 205,000 km² in India and Pakistan. It is the world's
                20th-largest desert, and the world's 9th-largest hot subtropical
                desert
            </p>
            <h1>Area: 249,254 km²</h1>
            <h1>
                Coordinates: 27°N 71°E﻿ / ﻿27°N 71°E Coordinates: 27°N 71°E﻿ / ﻿27°N
                71°E
            </h1>
            <h1>Protected: 41,833 km2 (18%)</h1>
            <a href="user-registration.php" class="btn">Book now</a>
            <a href="thar.php" class="btn">Services</a>
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
                <a href="weather.html"> <i class="fas fa-chevron-right"></i> weather </a>
                <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
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
<?php
session_start();
if (isset($_SESSION["username"])) {
    $username1 = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?> 

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
    <title>Your Guide Tourism</title>
    <style>

          .page-header{
            text-align: center;
        }

.pricing .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.pricing .box-container .box{
    background:white;
    border-radius: .5rem;
    padding:2rem;
    text-align: center;
}

.pricing .box-container .box h3{
    padding:1rem;
    background:white;
    border-radius: .5rem;
    font-size: 2rem;
    color:black);
}

.pricing .box-container .box .price{
    padding-top: 2rem;
}

.pricing .box-container .box .price span{
    font-size: 2rem;
    color:black;
}

.pricing .box-container .box .price .amount{
    font-size: 5rem;
    color:black;
    font-weight: bolder;
}

.pricing .box-container .box ul{
    padding: .5rem 0;
    list-style: none;
}

.pricing .box-container .box ul li{
    padding: 1rem 0;
    font-size: 1.7rem;
    color:black;
}

.heading{
    text-align: center;
    padding-bottom: 2rem;
    color:white;
    font-size: 4rem;
}

.heading span{
    position: relative;
    z-index: 0;
}

.heading span::before{
    content: '';
    position: absolute;
    bottom: 1rem; left: 0;
    z-index: -1;
    background: blue;
    height: 100%;
    width: 100%;
    clip-path: polygon(0 90%, 100% 83%, 100% 100%, 0% 100%);
}
.blue{
    margin-right:5px;
    color:aqua;
}
.txt-nav{
    font-size:20px;
    color:white;
}
    </style>
</head>

<body>
    <!-- Header section -->
    <?php
    include "nav.php";
   ?>

    <section class="home" id="home">
        <div class="image" data-aos="fade-down">
            <img src="img/32.png" alt="">
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


 <section class="pricing" id="pricing">
    <h1 class="heading"> suggested  <span>stay budget For Desert</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">30000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>7 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">60000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>15 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">100000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <h1 class="heading"> suggested  <span>stay budget For Forest</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">45000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>7 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">75000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>15 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">95000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <h1 class="heading"> suggested  <span>stay budget For Hilli Areas</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">35000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>7 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">45000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>15 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">55000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <h1 class="heading"> suggested  <span>stay budget For Rivers</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">25000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>7 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">45000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>15 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">98000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <h1 class="heading"> suggested  <span>stay budget For Historical Areas</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">53000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>7 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">64000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>15 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">73000</span>
                <span>/tour</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>Transport</li>
                <li>luxury hotel</li>
            </ul>
        </div>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Style sheet -->

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/weather.css">
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" href="lib/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" />
    <!-- Font_Awesome -->

    <link rel="stylesheet" href="lib/fontawesome-6.2.1/css/all.min.css" />
    <title>Your Guide Tourism</title>
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
            <h3>Weather</h3>
        </div>
    </div>


    <div class="container">
        <form>
          <input type="text" id="search" placeholder="Enter city name">
          <button type="submit">Search</button>
        </form>
        <div id="weather"></div>
    </div>

 <div class="mt-5">
    <table>
    <thead>
        <tr>
            <th>Location</th>
            <th>Do's</th>
            <th>Don'ts</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Desert</th>
            <td>Dress appropriately for the climate and respect local traditions. Take a guided tour and try the local cuisine.</td>
            <td>Wander off alone or harm wildlife. Ignore safety precautions or engage in illegal activities.</td>
        </tr>
        <tr>
            <th>Forest</th>
            <td>Respect the environment and wildlife by following Leave No Trace principles. Bring appropriate gear, such as sturdy shoes and a map or compass..</td>
            <td>Damage the forest by littering, camping in undesignated areas, or starting fires outside of designated fire pits. Disturb the wildlife by feeding or approaching them.</td>
        </tr>
        <tr>
            <th>Hilli Area</th>
            <td>Dress appropriately for the climate and terrain, including wearing layers and sturdy shoes with good traction. Respect local customs and traditions.</td>
            <td> Leave trash or damage the environment. Ignore safety precautions such as staying on designated paths or ignoring weather warnings.</td>
        </tr>
        <tr>
            <th>Rivers</th>
            <td> Wear appropriate safety gear, such as life jackets and water shoes. Respect the environment by not littering or damaging the river ecosystem.</td>
            <td>Swim in areas with strong currents or undertow. Damage the environment by leaving trash or using soap or other chemicals in the river.</td>
        </tr>
        <tr>
            <th>Historical Places</th>
            <td>Respect the cultural and historical significance of the site by following rules and guidelines. Take the opportunity to learn about the history and culture of the location.</td>
            <td>Touch or remove artifacts or other historical items. Damage or deface the site in any way.</td>
        </tr>
     </tbody>
   </table>     
 </div>

    
    <script src="weather.js"></script>
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
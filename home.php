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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="vendor/alertify/alertify.css"/>
    <!-- Font_Awesome -->

    <link rel="stylesheet" href="lib/fontawesome-6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="swal.css">
    <!-- Alertify.js CSS -->

<!-- Alertify.js JavaScript -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="vendor/alertify/alertify.js"></script>
    <!-- SweetAlert.js CSS -->

<!-- SweetAlert.js JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>


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


.hyper{
    text-decoration:none;
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
<!-- 
    <div class="banner">
        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <h3 class="page-content">Welcome  <?php echo $username1;?></h3>
        </div>
    </div> -->


 <section class="pricing" id="pricing">
    <h1 class="heading"> suggested  <span>stay budget</span> </h1>
    <div class="box-container">
        <a data-aos="zoom-in-left" data-aos-delay="1300" href="family.php" class="btn">For Family</a>
        <a data-aos="zoom-in-left" data-aos-delay="1300" href="female.php" class="btn">For Female Friends</a>
        <a data-aos="zoom-in-left" data-aos-delay="1300" href="male.php" class="btn">For Male Friends</a>
        
    </div>
</section>

<!-- 
    <div class="page-header">
        <a href="logout.php" class="btn">Logout</a>
	</div> -->
    

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
<script src="logout.js"></script>i
</body>

</html>

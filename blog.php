<?php
// Set timezone
date_default_timezone_set('UTC');

// Define function to generate unique identifier
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Create MySQL connection
$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "user-registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get video and thumbnail file names and descriptions
  $video_name = generateRandomString() . "_" . basename($_FILES["video"]["name"]);
  $thumbnail_name = generateRandomString() . "_" . basename($_FILES["thumbnail"]["name"]);
  $description = $_POST["description"];
  
  // Create table if not exists
  $sql = "CREATE TABLE IF NOT EXISTS videos (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          video_name VARCHAR(255) NOT NULL,
          thumbnail_name VARCHAR(255) NOT NULL,
          description TEXT
        )";
  if (mysqli_query($conn, $sql)) {
    
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  
  // Insert data into table
  $sql = "INSERT INTO videos (video_name, thumbnail_name, description)
          VALUES ('$video_name', '$thumbnail_name', '$description')";
  if (mysqli_query($conn, $sql)) {
    
  } else {
    echo "Error inserting data: " . mysqli_error($conn);
  }
  
  // Move uploaded files to desired directory
  $target_video = "videos/" . $video_name;
  $target_thumbnail = "thumbnails/" . $thumbnail_name;
  if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_video) && move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_thumbnail)) {
    
  } else {
    echo "Error uploading files";
  }
}

// Close connection
mysqli_close($conn);
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
.blogs .box-container{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap:1.5rem;
}

.blogs .box-container .box{
  background:white;
  border-radius: .5rem;
  box-shadow:white;
  padding:2rem;
}

.blogs .box-container .box .image{
  height: 20rem;
  width: 100%;
  overflow:hidden;
  border-radius: .5rem;
  background: white;
}

.blogs .box-container .box .image img{
  height: 100%;
  width: 100%;
}

.blogs .box-container .box:hover .image img{
  transform:scale(1.2);
}

.blogs .box-container .box .content{
  padding-top: 1rem;
}

.blogs .box-container .box .content h3{
 font-size: 2rem;
 color:black;
 line-height: 1.5;
}

.blogs .box-container .box .content .icons{
  display: flex;
  justify-content: space-between;
  border-top: .1rem solid gray;
  margin-top: 2rem;
  padding-top: 1.5rem;
}

.blogs .box-container .box .content .icons a{
  font-size: 1.5rem;
  color:black;
}

.blogs .box-container .box .content .icons a:hover{
  color:blue;
}

.blogs .box-container .box .content .icons a i{
  padding-right: .5rem;
  color:blue;
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
            <h3>Upload your blogs here..</h3>
        </div>
    </div>

    <form action="blog.php" method="post" enctype="multipart/form-data" class="form">
        <label for="video">Video:</label>
        <input type="file" name="video" id="video">
        
        <label for="thumbnail">Image:</label>
        <input type="file" name="thumbnail" id="thumbnail">
     
        <label for="description">Reviews:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <input type="submit" value="Submit" class="btn">
    </form>


<section class="blogs" id="blogs">
    <h1 class="heading reviewcol"> our <span>blogs</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="img/3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cholistan Desert</h3>
                <a href="desertblog.html" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st march, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by rizwan </a>
                </div>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="img/16.jpg" alt="">
            </div>
            <div class="content">
                <h3>Trip to village in Kangra</h3>
                <a href="village.html" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 3rd jun, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by rehana </a>
                </div>
            </div>
        </div>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="img/23.jpg" alt="">
            </div>
            <div class="content">
                <h3>Picnic trip</h3>
                <a href="picnicblog.html" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 11th may, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by homaiyon </a>
                </div>
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
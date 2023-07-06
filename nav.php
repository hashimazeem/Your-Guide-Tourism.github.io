<?php
session_abort();
session_start();

?>
<header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">
            <i class="fas fa-paper-plane"></i>Your Guide Tourism
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="home.php">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="weather.php">weather</a>
            <a data-aos="zoom-in-left" data-aos-delay="1150" href="blog.php">blogs</a>
            
            <?php
            if(isset($_SESSION["username"])){
                echo '<a data-aos="zoom-in-left" data-aos-delay="1150" href="#" id="logout">Logout</a>';    
            }
            ?>
        </nav>
        <?php
            if(isset($_SESSION["username"])){
                echo '<span class="txt-nav">  <span class="blue">Welcome! </span>'.$_SESSION["username"].'</span>';
            }
        ?>
    </header>
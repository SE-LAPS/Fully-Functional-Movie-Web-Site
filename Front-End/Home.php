<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "film_mania";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Replace this placeholder with your actual list of movies
$movies = array(
    array(
        'title' => 'The Super Mario Bros. Movie (2023)',
        'release_year' => 2023,
        'director' => 'Aaron Horvath'
    ),
    array(
        'title' => 'The King of Blaze',
        'release_year' => 2022,
        'director' => 'Hsiu Lan Hu'
    ),
    array(
        'title' => 'X-Men 2000',
        'release_year' => 2000,
        'director' => 'Bryan Singer'
    ),
    array(
        'title' => 'Kung Fu Panda',
        'release_year' => 2008,
        'director' => 'Mark Osborne'
    ),
    array(
        'title' => 'The Batman',
        'release_year' => 2022,
        'director' => 'Matt Reeves'
    ),
    array(
        'title' => 'Interstellar',
        'release_year' => 2014,
        'director' => 'Christopher Nolan'
    ),
    array(
        'title' => 'Avengers: Endgame',
        'release_year' => 2019,
        'director' => 'Anthony Russo, Joe Russo'
    ),
    array(
        'title' => 'Harry Potter & Deathly Hallows',
        'release_year' => 2010,
        'director' => 'David Yates'
    ),
    array(
        'title' => 'Barbie',
        'release_year' => 2022,
        'director' => 'Greta Gerwig'
    )
);

if (isset($_POST['search_query'])) {
    $search_query = mysqli_real_escape_string($connection, $_POST['search_query']);
    $filtered_movies = array_filter($movies, function ($movie) use ($search_query) {
        return stripos($movie['title'], $search_query) !== false;
    });
} else {
    $filtered_movies = $movies;
}
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FilmMania</title>
        <link rel="stylesheet" type="text/css" media="all" href="footer.css">
        <link rel="stylesheet" type="text/css" media="all" href="HomeStyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="icon" type="image/x-icon" href="logo.png">
        
    </head>

    <body>
        <header>
            <span><img src="logo1.png" class="logo"></span>
            <div>
                <div class="topnav">
                    <a href="movie_details.php">Home</a>
                    <a href="movieCards.php">About Us</a>
                    <a href="../admin/update_movie.php">Latest Movies</a>
                    <div class="dropdown">
                        <button class="dropbtn">Genre
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="MovieDetail.php">Action</a>
                            <a href="MovieDetail.php">Romance</a>
                            <a href="MovieDetail.php">Horror</a>
                            <a href="MovieDetail.php">Comedy</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Language
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">English</a>
                            <a href="#">Sinhala</a>
                        </div>
                    </div>
                   
                    
                    <div class="search-container">
    <form method="get" action="search_results.php">
        <input type="text" placeholder="Search.." name="search_query">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>


                </div>
            </div>
        </header>


        <div class="container">
            <h2>Unlimited Movies, TV Series and More.</h2>
            <p>Watch Anywhere. Cancle Anytime.</p>
            <p>Ready to watch? Click the button for log in or sign up.</p>
            <div class="buttons">
                <a href="Signin.php" target="_blank">Sign Up</a>
                <a href="Login.php" target="_blank">Login</a>
            </div>
        </div>


        <div class="footer">
            <footer>
                <div class="content">
                    <div class="left box">
                        <div class="upper">
                            <div class="topic">About us</div>
                            <p>Whatever your taste, and no matter where you live, we give you access to best-in-class 
                                TV series, documentaries and feature films.</p>
                        </div>
                        <div class="lower">
                            <div class="topic">Contact us</div>
                            <div class="phone">
                                <a href="#"><i class="fas fa-phone-volume"></i>+94711234567</a>
                            </div>
                            <div class="email">
                                <a href="#"><i class="fas fa-envelope"></i>filmmania@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="middle box">
                        <div class="topic">Quick Access</div>
                        <div><a href="Home.php">Home</a></div>
                        <div><a href="movieCards.php">About Us</a></div>
                        <div><a href="Signin.php" target="_blank">Sign In</a></div>
                        <div><a href="Login.php" target="_blank">Log In</a></div>
                        <div><a href="FAQ.php" target="_blank">FAQ</a></div>
                        <div><a href="Userprofile.php" target="_blank">Profile</a></div>
                    </div>
                    <div class="right box">
                        <div class="topic">Subscribe us</div>
                        <form action="#">
                            <input type="text" placeholder="Enter email address">
                            <input type="submit" name="Email" value="Send">
                            <div class="media-icons">
                                <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Den"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UCSFdNh980h2zXo5QE9aTDLA"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bottom">
                    <p>Copyright © 2023 <a href="#">IIT</a> All rights reserved</p>
                </div>
            </footer>
        </div>
    </body>
    
</html>

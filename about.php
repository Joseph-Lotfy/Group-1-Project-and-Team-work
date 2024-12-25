<?php
    session_start();
    $_SESSION;
    include ("connection.php");
    include ("functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/about1.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Days+One&family=Figtree:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<style type="text/css">
	
		#text{
	
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}
	
		#button{
	
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}
	
		#box{
	
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
		}
		</style>


</head>
<body>
	<div class="bg-image" id="bg-image"></div>
    <div class="right-bar">
        <button class="navbar-toggler" type="button" id="navbar-toggler">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
              </svg>
        </button>
        <div class="right-nav" id="right-nav">
            <div class="nav-header">
                <h1>VibeStream</h1>
                <button type="button" class="close-button"  id="close-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                      </svg>
                </button>
            </div>
            <div class="nav-items">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="index.php">Music <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="artist.php">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php">About <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>News</a>
                    </li>
                    <li class="nav-item">
                        <a>EVENTS <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>EVENTS <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>Gold</a>
                    </li>
                    <li class="nav-item">
                        <a>Partners</a>
                    </li>
                    <li class="nav-item">
                        <a>press</a>
                    </li>
                </ul>
                <div class="icons">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram vertical-icon"></i></a>
                    <a href="https://www.tiktok.com/foryou?lang=en"><i class="fa-brands fa-tiktok vertical-icon"></i></a>
                    <a href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter vertical-icon"></i></a>
                    <a href="https://www.twitch.tv/"><i class="fa-brands fa-twitch vertical-icon"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook vertical-icon"></i></a>
                    <a href="https://discord.com/"><i class="fa-brands fa-discord vertical-icon"></i></a>
                    <a href="https://open.spotify.com/intl-ar"><i class="fa-brands fa-spotify vertical-icon"></i></a>
                </div>
            </div>

        </div>
        <!-- <nav class="navbar fixed-right">

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Josef Lotfy</h5>
                <button type="button" class="close-button"  data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                      </svg>
                </button>
                </div>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a>Music <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>Artists</a>
                    </li>
                    <li class="nav-item">
                        <a>About <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>News</a>
                    </li>
                    <li class="nav-item">
                        <a>EVENTS <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>EVENTS <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a>Gold</a>
                    </li>
                    <li class="nav-item">
                        <a>Partners</a>
                    </li>
                    <li class="nav-item">
                        <a>press</a>
                    </li>
                </ul>
                <div class="icons">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram vertical-icon"></i></a>
                    <a href="https://www.tiktok.com/foryou?lang=en"><i class="fa-brands fa-tiktok vertical-icon"></i></a>
                    <a href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter vertical-icon"></i></a>
                    <a href="https://www.twitch.tv/"><i class="fa-brands fa-twitch vertical-icon"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook vertical-icon"></i></a>
                    <a href="https://discord.com/"><i class="fa-brands fa-discord vertical-icon"></i></a>
                    <a href="https://open.spotify.com/intl-ar"><i class="fa-brands fa-spotify vertical-icon"></i></a>
                </div>

            
                </div>
            </div>
        </nav> -->
        <div class="vertical-icons">
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram vertical-icon"></i></a>
            <a href="https://www.tiktok.com/foryou?lang=en"><i class="fa-brands fa-tiktok vertical-icon"></i></a>
            <a href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter vertical-icon"></i></a>
            <a href="https://www.twitch.tv/"><i class="fa-brands fa-twitch vertical-icon"></i></a>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook vertical-icon"></i></a>
            <a href="https://discord.com/"><i class="fa-brands fa-discord vertical-icon"></i></a>
            <a href="https://open.spotify.com/intl-ar"><i class="fa-brands fa-spotify vertical-icon"></i></a>
        </div>
        <div class="logo">
            <img src="img/j.png">
        </div>
    </div>
    <div class="container  filterBlur" style="margin-top: 10px;">
        <h1 class="heading1">ABOUT</h1>
        <h1 class="heading2">VibeStream</h1>
        <div class="about-paragraph">
            <p>
                Discover a music experience like no other with our dynamic platform. Designed to bring you closer to your favorite songs and artists, our music player offers a clean and intuitive interface for exploring playlists, browsing artist profiles, and staying in tune with the latest trends.
            </p>
            <p>
                As a team of passionate developers from the Faculty of Engineering, we’ve combined our technical expertise and love for music to create a seamless journey for music lovers. Every feature is designed to be user-focused and work beautifully across devices. Dive into an experience where innovation meets simplicity, all crafted with care and attention to detail.
            </p>
        </div>
        <h1 class="heading3">OUR</h1>
        <h1 class="heading4">DEVELOPERS</h1>
        <!-- <div class="card_cont">
            <div class="card">
                <img src="img/Josef.jpeg" height="280px">
                <div class="text">
                    <h4>Joseph Lotfy</h4>
                    <p>Proffesion</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/jossef.lotfy.7"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/home?lang=en"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/joseph-lotfy-fayez?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fa-brands fa-linkedin "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Abanoub Samy1.jpg" height="280px">
                <div class="text">
                    <h4>Abanoub Samy</h4>
                    <p>Proffesion</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/abanob.samy.5220665"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/home?lang=en"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/abanoub-samy-539399273?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fa-brands fa-linkedin "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Abanoub Adel.jpg" height="280px">
                <div class="text">
                    <h4>Abanoub Adel</h4>
                    <p>Proffesion</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/bebo.adel.7902?mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/home?lang=en"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/abanoub-adel-a816a528b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fa-brands fa-linkedin "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Peter.jpg" height="280px">
                <div class="text">
                    <h4>Peter Naeem</h4>
                    <p>Proffesion</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/profile.php?id=100084871332771&mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/home?lang=en"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/peter-naeem-2a2a3a2aa?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fa-brands fa-linkedin "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Hassan.jpg" height="280px">
                <div class="text">
                    <h4>Hassam Sayed</h4>
                    <p>Proffesion</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/home?lang=en"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin "></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        <section class="team-sec">

            <div class="team-cards">
              <!-- First Row -->
              <div class="team-card">
                <img class="team-img" src="img/Abanoub Adel.jpg" alt="Franklin Carlson" />
                <div class="card-content">
                  <h3>Abanob Adel</h3>
                  <p>The Fastest</p>
                </div>
              </div>
              <div class="team-card">
                <img class="team-img" src="img/Abanoub Samy1.jpg" alt="Antonia Moore" />
                <div class="card-content">
                  <h3>Abanoub Samy</h3>
                  <p>The Whisperer</p>
                </div>
              </div>
              <div class="team-card">
                <img class="team-img" src="img/Hassan.jpg" alt="Travis Lynch" />
                <div class="card-content">
                  <h3>Hassan Sayed</h3>
                  <p>The Game Changer</p>
                </div>
              </div>
      
              <!-- Second Row -->
              <div class="team-card">
                <img class="team-img" src="img/josef3.jpg" alt="New Person 1" />
                <div class="card-content">
                  <h3>Joseph Lotfy</h3>
                  <p>The artist</p>
                </div>
              </div>
              <div class="team-card">
                <img class="team-img" src="img/Peter.jpg" alt="New Person 2" />
                <div class="card-content">
                  <h3>Peter Naeem</h3>
                  <p>The Fearless One</p>
                </div>
              </div>

            </div>
          </section>
        <footer>
            <div class="footer">
            <div class="row">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
            
            <div class="row">
            <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="artist.php">Artists</a></li>
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="signup.php">Sign Up</a></li>

            </ul>
            </div>
            
            <div class="row">
                VibeStream  Copyright © 2024 VibeStream  - All rights reserved || Designed By: Group 1
            </div>
            </div>
        </footer>
    </div>

    <script src="SCRIPT/nav.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/620f487299.js" crossorigin="anonymous"></script>
</body>
</html>
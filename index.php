<?php
    session_start();
    $_SESSION;
    include ("connection.php");
    include ("functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
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
    <div class="container  filterBlur">
        <div class="cover-song">
            <div class="space"></div>
            <div class="row gap-2 justify-content-around">
                <img src="img/Keepitsimple.webp" class="col-lg-5" id="cover-song-image">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <div class="space-small"></div>
                    <h1 class="cover-song-name text-light" id="cover-song-name">Keep it simple</h1>
                    <h2 class="text-light conro" id="cover-song-artist">Conro</h2>
                    <div class="buttons" >
                        <button type="button" class="listen-button" id="listen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16" >
                            <path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z"/>
                          </svg>Download NOW
                        </button>
                        <button class="share-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
                              </svg> Share
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="song-list">
            <h1 class="song-list-title">Track List</h1>
            <div class="song">
                <audio class="audio">
                    <source src="audio/Sing For Absolution.mp3" type="audio/mpeg">
                </audio>
                <div class="song-left">
                    <div class="song-number">1</div>
                    <i class="play-icon bi bi-play-fill" data-state="play"></i>
                    <img src="img/Keepitsimple.webp" class="song-img">

                    <div class="song-detail">
                        <div class="song-name">The Small Things</div>
                        <div class="song-artist">Conro</div>
                    </div>
                </div>
                <div class="song-right">
                    <div class="song-time">3:32</div>
                    <i class="bi bi-share"></i>
                </div>
            </div>
            <div class="song">
                <audio class="audio">
                    <source src="audio/Starman.mp3" type="audio/mpeg">
                </audio>
                <div class="song-left">
                    <div class="song-number">2</div>
                    <i class="play-icon bi bi-play-fill" data-state="play"></i> <!-- Changed id to class -->
                    <img src="img/starman.jpeg" class="song-img">
                    <div class="song-detail">
                        <div class="song-name">Starman</div>
                        <div class="song-artist">David Bowe</div>
                    </div>
                </div>
                <div class="song-right">
                    <div class="song-time">4:14</div>
                    <i class="bi bi-share"></i>
                </div>
            </div>
            <div class="song">
                <audio class="audio">
                    <source src="audio/Bend & Break.mp3" type="audio/mpeg">
                </audio>
                <div class="song-left">
                    <div class="song-number">3</div>
                    <i class="play-icon bi bi-play-fill" data-state="play"></i> <!-- Changed id to class -->
                    <img src="img/bendandbreak.png" class="song-img">
                    <div class="song-detail">
                        <div class="song-name">Bend & Break</div>
                        <div class="song-artist">Keane</div>
                    </div>
                </div>
                <div class="song-right">
                    <div class="song-time">3:00</div>
                    <i class="bi bi-share"></i>
                </div>
            </div>
            <div class="song">
                <audio class="audio">
                    <source src="audio/Ode To The Mets.mp3" type="audio/mpeg">
                </audio>
                <div class="song-left">
                    <div class="song-number">4</div>
                    <i class="play-icon bi bi-play-fill" data-state="play"></i> <!-- Changed id to class -->
                    <img src="img/OdeToMets.jpeg" class="song-img">

                    <div class="song-detail">
                        <div class="song-name">Ode To Mets</div>
                        <div class="song-artist">The Strokes</div>
                    </div>
                </div>
                <div class="song-right">
                    <div class="song-time">4:12</div>
                    <i class="bi bi-share"></i>
                </div>
            </div>
            <div class="song">
                <audio class="audio">
                    <source src="audio/Butterflies & Hurricanes.mp3" type="audio/mpeg">
                </audio>
                <div class="song-left">
                    <div class="song-number">5</div>
                    <i class="play-icon bi bi-play-fill" data-state="play"></i> <!-- Changed id to class -->
                    <img src="img/Muse.jpg" class="song-img">

                    <div class="song-detail">
                        <div class="song-name">Butterflies & Hurricanes</div>
                        <div class="song-artist">Muse</div>
                    </div>
                </div>
                <div class="song-right">
                    <div class="song-time">5:02</div>
                    <i class="bi bi-share"></i>
                </div>
            </div>
            <div class="song">
                <audio class="audio">
                    <source src="audio/Instant Crush.mp3" type="audio/mpeg">
                </audio>
                <div class="song-left">
                    <div class="song-number">6</div>
                    <i class="play-icon bi bi-play-fill" data-state="play"></i> <!-- Changed id to class -->
                    <img src="img/instantCrush.jpg" class="song-img">

                    <div class="song-detail">
                        <div class="song-name">Instant Crush</div>
                        <div class="song-artist">Daft Punk</div>
                    </div>
                </div>
                <div class="song-right">
                    <div class="song-time">5:29</div>
                    <i class="bi bi-share"></i>
                </div>
            </div>
        </div>
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
            <li><a href="#">About Us</a></li>
            <li><a href="#">Artists</a></li>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Sign Up</a></li>

            </ul>
            </div>
            
            <div class="row">
                VibeStream  Copyright © 2024 VibeStream  - All rights reserved || Designed By: Group 1
            </div>
            </div>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/620f487299.js" crossorigin="anonymous"></script>
    <script src="SCRIPT/script2.js"></script>
</body>
</html>
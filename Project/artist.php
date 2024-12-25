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
    <title>Artists</title>
    <link rel="stylesheet" href="CSS/master.css">
    <link rel="stylesheet" href="./public/icons/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
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
    <div onmouseover="clickEvent()" class="artists">
        <!-- <header>
            <div class="img"></div>
            <div class="icons"></div>
            <div class="menu"></div>

        </header> -->
        <h1>VibeStream <br> <span>artists</span> </h1>
        <section class="featured">
            <h2>Featured</h2>
            <div class="owl-carousel owl-loaded owl-theme owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/pexels-eric-esma-302047-894156.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_331cb4a6.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_f55febf4.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.47.00_9d9ed7ae.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.47.28_31d73777.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/pexels-eric-esma-302047-894156.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_331cb4a6.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_f55febf4.jpg" alt="Image_Error"></div>
                        <div class="owl-item"><img style="width: 367px; height: 550px;" src="./public/images/WhatsApp Image 2024-12-18 at 11.47.00_9d9ed7ae.jpg" alt="Image_Error"></div>
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <!-- <div class="owl-dots">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div> -->
            </div>
        </section>

        <div class="title flex">
            <h2>VibeStream <br> roster</h2>
            <div style="gap: 8px;" class="flex">
                <button onclick="clickSearchEvent()" class="search-button"><label for="search-word"><span
                            class="icon-search"></span></label><input type="text" placeholder="SEARCH"
                        class="search-word" id="search-word" autofocus></button>
                <button class="filter-button"><span style="font-size: 1.5rem; margin-right: 0.88rem;"
                        class="icon-filter_list"></span><span
                        style="position: relative; top: -3px; font-weight: bold;">FILTERS (1)</span></button>
            </div>
        </div>
        <div class="articles flex">
            <article class="flex">
                <img src="./public/images/pexels-eric-esma-302047-894156.jpg" alt="image error">
                <h3>hassan</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_331cb4a6.jpg" alt="image error">
                <h3>El masrryin</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_f55febf4.jpg" alt="image error">
                <h3>Massar Egbari</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.47.00_9d9ed7ae.jpg" alt="image error">
                <h3>muse</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.47.28_31d73777.jpg" alt="image error">
                <h3>The Strokes</h3>
            </article>
            <article class="flex">
                <img src="./public/images/pexels-eric-esma-302047-894156.jpg" alt="image error">
                <h3>hassan</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_331cb4a6.jpg" alt="image error">
                <h3>hassan</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.46.49_f55febf4.jpg" alt="image error">
                <h3>hassan</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.47.00_9d9ed7ae.jpg" alt="image error">
                <h3>Hassan</h3>
            </article>
            <article class="flex">
                <img src="./public/images/WhatsApp Image 2024-12-18 at 11.47.28_31d73777.jpg" alt="image error">
                <h3>Hassan</h3>
            </article>

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
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel(
                items= 1, // Example option
                loop= true,
                autoplay= true,
            );
        });
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://kit.fontawesome.com/620f487299.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="SCRIPT/index.js"></script>
</body>

</html>
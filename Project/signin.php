<?php 
session_start();

include("connection.php");
include("functions.php");

$error_message = ""; // Variable to store error message

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Read from database
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            } else {
                $error_message = "Wrong username or password!";
            }
        } else {
            $error_message = "Wrong username or password!";
        }
    } else {
        $error_message = "Please enter a valid username and password!";
    }
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/signin1.css">
    <link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Days+One&family=Figtree:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
		


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
		<!-- <div id="box">
		
			<form method="post">
				<div style="font-size: 20px;margin: 10px;color: white;">Sign in</div>
		
				<input id="text" type="text" name="user_name"><br><br>
				<input id="text" type="password" name="password"><br><br>
		
				<input id="button" type="submit" value="Signup"><br><br>
		
				<a href="signup.php">doesn't have an account? Click here to make a new account</a><br><br>
			</form>
		</div> -->
        <div class="login-wrap"> 
            <div class="login-html">
              <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
              <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
              
              <div class="login-form">
                
                <form method="post" class="sign-in-htm">
                  <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" name="user_name">
                  </div>
                  <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password" name="password">
                  </div>
                  <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                  </div>
                  <p id="demo"></p>
                  <div class="group">
                    <input type="submit" class="button" value="Sign In">
                  </div>
                  <div class="hr"></div>
                  <div class="foot-lnk">
                    <a href="#forgot">Don't have an account</a>
                  </div>
                  
                  <div class="form-text">
                    <p>Feel the rhythm, embrace the melody!<br> your favorite music is just a click away</p>
                  </div>
                </form>
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
        // Dynamically inject error message if it exists
        <?php if (!empty($error_message)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('demo').innerHTML = "<?php echo addslashes($error_message); ?>";
                document.getElementById('demo').style.color = "red"; // Add styling for error message
            });
        <?php endif; ?>
    </script>
    <script src="SCRIPT/nav.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/620f487299.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
//checking connection and session start
include "connection_files/connection.php";
?>
<?php
//if user alredy logged in redirecting to logged page
if(isset($_SESSION['username_logged']) or isset($_SESSION['admin-pin']))
{
    header("location:home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSBM Community Portal</title>
    <link rel="icon" href="Logo.png">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="bootstrap/bootstrap1.css">
    <style>
        html {
            overflow-y: hidden;
        }
       .content_area {
           padding-top: 100px;
           overflow: hidden;
           width: 100%;
           height: 100%;
           position: relative;
           color: #ffffff;
           background-color: #000000;
       }

       .text_lines {
           position: absolute;
           top: 30%;
           left: 5%;

    </style>
</head>
<body>
<nav>
    <!--display successful logout massage-->
    <?php if(isset($_SESSION['logout_msg'])): ?>
        <div class="alert alert-<?=$_SESSION['logout_type']?>">
            <?php
            echo $_SESSION['logout_msg'];
            unset($_SESSION['logout_msg']);
            unset($_SESSION['logout_type']);
            ?>
        </div>
    <?php endif; ?>
    <div class="navpanel">
        <div class="logo"><img src="Logo.png"></div>
        <input type="radio" name="responsive_slide" id="menu-btn">
        <input type="radio" name="responsive_slide" id="close-btn">
        <ul class="nav-links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="#">Welcome !</a></li>
            <li><a href="about.html">About us</a></li>
            <li>
                <a href="#" class="clubs_and_societies_navigation">Clubs & Societies &nbsp;<i class="fa fa-caret-down"></i></a>
                <input type="checkbox" id="show-clubMenu">
                <label for="show-clubMenu" class="clubs">Clubs & Societies &nbsp;<i class="fa fa-caret-down"></i></label>
                <div class="clubs_dropbox">
                    <div class="content">
                        <div class="row" id="fh">
                            <img src="Logo.png" alt="">
                        </div>
                        <div class="row">
                            <header>Sports Clubs</header>
                            <ul class="clubs_dropbox-links">
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-athletics-club/">Athletics Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-badminton-club/">Badminton Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-cricket-club/">Cricket Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-basketball-club/">Basketball Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-rugby-club-2/">Rugby Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-swimming-club/">Swimming Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-table-tennis-club/">Table Tennis Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-netball-club/">Netball Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-martial-arts-club/">Martial Arts Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-hockey-club/">Hockey Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-chess-club/">Chess Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-volleyball-club/">Volleyball Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-soccer-club/">Football Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-fitness-club/">Fitness Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-archery-club/">Archery Club</a></li>

                            </ul>
                        </div>
                        <div class="row">
                            <header>Activity / Religious Clubs</header>
                            <ul class="clubs_dropbox-links">
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-media-club/">Media Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-music-club/">Music Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-drama-club/">Drama Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-dancing-club/">Dancing Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-literature-club/">Literature Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-graphics-painting-club/">Graphics & Painting Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-explorers-club/">Explorer's Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-green-task-force/">Green Task Force</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-nature-wild-life-club/">Nature & Wildlife Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-oratory-debating-club/">Oratory & Debating Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-community-service-club/">Community Service Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-aerobics-club/">Aerobics Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-health-wellness-club-wellbeing-association/">Well-being Association </a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-buddhist-society/">Buddhist Society </a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-hindu-society/">Hindu Society </a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-catholic-christian-society/">Catholic & Christian Society </a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/nsbm-islamic-society/">Islamic Society </a></li>

                            </ul>
                        </div>
                        <div class="row">
                            <header>Academic / International Clubs</header>
                            <ul class="clubs_dropbox-links">
                                <li><a href="https://www.nsbm.ac.lk/club/foss/">FOSS Community</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/ieee/">IEEE Student Branch</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/innovators-club/">Innovator's Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/rotaract-club/">Rotaract Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/leo-club/">Leo Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/aiesec/">AIESEC</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/toastmaster-club/">Toastmaster Club</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/un-student-forum/">UN Student Forum</a></li>
                                <li><a href="https://www.nsbm.ac.lk/club/gavel-club/">Gavel Club</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="clubs_and_societies_navigation">Profile &nbsp;<i class="fa fa-caret-down"></i></a>
                <input type="checkbox" id="showDrop">
                <label for="showDrop" class="clubs">Profile &nbsp;<i class="fa fa-caret-down"></i></label>
                <ul class="my_profile-dropbox">
                    <li><a href="LoginPage/LogIn.php">Login</a></li>
                    <li><a href="RegisterPage/Register.html">Register</a></li>
                </ul>
            </li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
</nav>
 <!--page Content start-->
<div class="content_area">
    <img src="welcome.jpg" alt="Welcome_image" style="opacity: 0.25;">
    <div class="text_lines">
        <h1 style="font-weight: bold;">Welcome to NSBM Community Portal</h1>
        <div style="background-color: transparent; width: 750px; height: 100px;">
            <br>
        <p style="text-align: justify; font-size: 20px;">NBSM is a very supportive environment for co-curricular activities of students.
            NSBM community portal is for students to interact with each other and get updates on upcoming events.
            <br><br>Please log in to your profile if you have already registered. Otherwise, Register today to create a new profile and stay connected to the NSBM community Portal.
        </p>
        </div>

    </div>
</div>
<!-- page Content end-->

<footer>

</footer>

</body>
</html>
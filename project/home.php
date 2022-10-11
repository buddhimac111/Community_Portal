<?php
//checking connection and session start
include "connection_files/connection.php";
?>
<?php
//redirecting to index if user or admin is unknown
if(!isset($_SESSION['username_logged']) and !isset($_SESSION['admin-pin']))
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - NSBM Community Portal</title>
    <link rel="icon" href="Logo.png">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="bootstrap/bootstrap1.css">

    <script lang="JavaScript" type="text/javascript">
        function ConfLogout() {
            let text = "You will be logged out as a result of this Action.\nContinue the Action?";
            if (confirm(text) == true)
            {
                return true;
            }
        }
    </script>

</head>
<body style="background-color:#000000; ">
<nav>
    <div class="navpanel">
        <div class="logo"><a href="home.php"><img src="Logo.png"> </a></div>
        <input type="radio" name="responsive_slide" id="menu-btn">
        <input type="radio" name="responsive_slide" id="close-btn">
        <ul class="nav-links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="#">Home</a></li>
            <li><a href="search.php">Search &nbsp<i class="fa fa-search"></i> </a></li>

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
            <li><a href="about.php">About us</a></li>
            <li>
                <a href="#" class="clubs_and_societies_navigation">My Profile &nbsp;<i class="fa fa-caret-down"></i></a>
                <input type="checkbox" id="showDrop">
                <label for="showDrop" class="clubs">My Profile &nbsp;<i class="fa fa-caret-down"></i></label>
                <ul class="my_profile-dropbox">
                    <li><a href="profile/profile.php">View</a></li>
                    <li><a onclick="return ConfLogout()==true" href="profile/logout.php">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
</nav>

 <!--page Content start-->
<?php
$query="SELECT event_id,topic,details,photo,date_and_time from events ORDER BY date_and_time ASC ";
$output=mysqli_query($connection,$query);

if($output)
{
    echo "<section class='main--container'>";
    while ($card = mysqli_fetch_assoc($output)){
        //change date and time format
        $db_date = date_create($card['date_and_time']);
        $new_date = date_format($db_date, " j F, Y \\a\\t h:i A");
        echo "<div class='card'>";
        echo '<img alt="Event_cover_Image" src="data:image/jpeg;base64,'.base64_encode($card['photo']).'" style="margin-top:20px; max-width: 90%; display: block; margin-left: auto; margin-right: auto; border-radius: 25px; height:200px; width:350px;" />';
        echo "<h3 class='title'>{$card['topic']}</h3>";
        echo "<div class='div_border'>";
        echo "<p class='para'>{$card['details']}</p>";
        echo "</div> &nbsp;";
        echo "<p class='para'><b>{$new_date}</b> </p>";
        echo "<form name='Readmore_form' method='post' action='Readmore.php'>
              <input name='EID' type='number' value='{$card['event_id']}' hidden>
              <button type='submit' class='btn btn-success' style='width: 370px;'>Read More</button>
              </form>";
        echo "</div>";

    }
    echo "</section>";
}

?>


<!-- page Content end-->

<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-map-marker"></i>
                        <div class="cta-text">
                            <h4>Visit us</h4>
                            <span>Mahenwaththa,
                Pitipana, Homagama,
                Sri Lanka </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta"  style="padding-left: 100px;">
                        <i class="fa fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>0115 445 000</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-envelope"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>inquiries@nsbm.ac.lk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="home.php">
                                <img src="Logo.png" class="img-fluid" alt="logo" style="height: 75px;">
                            </a>
                        </div>
                        <div class="footer-text">
                            <p>NBSM is a very supportive environment for co-curricular activities of students.NSBM community portal is for students to interact with each other and get updates on upcoming events.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="https://www.facebook.com/nsbm.lk/"><i class="fab fa-facebook" style="font-size: 36px;"></i></a>
                            <a href="https://twitter.com/nsbm_srilanka?lang=en"><i class="fab fa-twitter" style="font-size: 36px;"></i></a>
                            <a href="https://www.instagram.com/nsbmgreenuniversity/?hl=en"><i class="fab fa-instagram" style="font-size: 36px;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30" style="text-align: right;">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3 style="padding-right: 70px;">Useful Links</h3>
                        </div>
                        <ul class="useful_links">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="search.php">Search</a></li>
                            <li><a href="https://www.nsbm.ac.lk">Ofiicial site</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022, All Right Reserved NSBM Community Portal</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">

                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

</body>
</html>
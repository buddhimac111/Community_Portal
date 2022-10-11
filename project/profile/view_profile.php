<?php
//checking connection and session start
include "../connection_files/connection.php";
?>
<?php

//redirecting to login page if user is unknown
if(!isset($_SESSION['username_logged']) and !isset($_SESSION['admin-pin']))
{
    header("location:../LoginPage/LogIn.php");
}
?>
<?php
$username=$_GET['username'];
$sql="SELECT * FROM users WHERE username='$username'";
$user_result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($user_result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../Logo.png">
    <link rel="stylesheet" type="text/css" href="prof.css">
    <link rel="stylesheet" type="text/css" href="bootstrap1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
    <title>User-Profile</title>

</head>
<body>
<div class="prof-box">
    <table border="0">
        <tr>
            <td class="blocks" id="topleft">
                <a href="../search.php"><button id="icon_btn"><i class="fa fa-arrow-circle-left" id="icon"></i></button></a>
            </td>
            <td class="blocks"><?php echo "<div id='dp'>"; echo '<img alt="Profile Avatar" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'" style="height:125px; width:125px; border-radius: 50%; border: 5px solid #555;" />';  echo "</div>";?></td>
        </tr>
    </table>
    <div class="top-section">
        <h2><?php echo $row['first_name'];echo " ";echo $row['last_name'];?></h2>
        <h5><?php echo $row['username'];?></h5>
        <p><?php echo $row['email'];?></p>
        <hr>
    </div>
    <div class="info-section">
        <div id="heading">
            <h4><?php echo $row['headline'];?></h4>
        </div>
        <br>
        <div id="bio">
            <p>
                <?php echo $row['bio'];?>
            </p>
        </div>


    </div>

</div>


</body>
</html>
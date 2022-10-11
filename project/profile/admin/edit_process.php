<?php
//checking connection and session start
include "../../connection_files/connection.php";
?>
<?php
//redirecting unauthorized admins
if(!isset($_SESSION['admin-pin']))
{
    header("location:../../LoginPage/logIn.php");
}
?>
<?php
$e_id=$_SESSION['e_id'];
$new_topic=mysqli_real_escape_string($connection,$_POST['topic']);
$new_details=mysqli_real_escape_string($connection,$_POST['details']);
$new_date_time=mysqli_real_escape_string($connection,$_POST['date_time']);


if ($_FILES['cp']['size'] != 0)
{
//update with cover photo image
    $new_cover = addslashes(file_get_contents($_FILES['cp']['tmp_name']));
    $update_sql="UPDATE events SET topic='$new_topic',details='$new_details',photo='$new_cover',date_and_time='$new_date_time' WHERE event_id='$e_id'";
    $result=mysqli_query($connection,$update_sql);
    if($result)
    {
        $_SESSION['published_msg']="Event has been successfully Updated!!!!";
        $_SESSION['published_msg_type']="success";
        unset($_SESSION['e_id']);
        header("location:manage_events.php");
    }
    else
    {
        $_SESSION['published_msg']="Uploaded Image doesn't Support....or ".$connection->error;
        $_SESSION['published_msg_type']="danger";
        unset($_SESSION['e_id']);
        header("location:manage_events.php");
    }


}
else
{
    //update without cover photo image
    $update_sql="UPDATE events SET topic='$new_topic',details='$new_details',date_and_time='$new_date_time' WHERE event_id='$e_id'";
    $result=mysqli_query($connection,$update_sql);
    if($result)
    {
        $_SESSION['published_msg']="Event has been successfully Updated!!!!";
        $_SESSION['published_msg_type']="success";
        unset($_SESSION['e_id']);
        header("location:manage_events.php");
    }
    else
    {
        $_SESSION['published_msg']="Uploaded Image doesn't Support....or ".$connection->error;
        $_SESSION['published_msg_type']="danger";
        unset($_SESSION['e_id']);
        header("location:manage_events.php");
    }


}

?>


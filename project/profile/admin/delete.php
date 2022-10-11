<?php
//checking connection and session start
include "../../connection_files/connection.php";
?>
<?php

if(isset($_GET['user_id'])) {
    $delete_id = mysqli_real_escape_string($connection, $_GET['user_id']);
    $sql = "DELETE FROM users WHERE id={$delete_id} LIMIT 1";
    $result = mysqli_query($connection, $sql);


    if ($result)
    {
        $_SESSION['delmsg'] = "(ID = " . $_GET['user_id'] . ") User has been successfully deleted!";
        $_SESSION['delmsg_type'] = "warning";
        header("location:admin.php");
    }
    else
    {
        $_SESSION['delmsg'] = "Error! can't delete the record from database";
        $_SESSION['delmsg_type'] = "danger";
        header("location:admin.php");
    }
}

if(isset($_GET['event_id'])) {
    $delete_id = mysqli_real_escape_string($connection, $_GET['event_id']);
    $sql = "DELETE FROM events WHERE event_id={$delete_id} LIMIT 1";
    $result = mysqli_query($connection, $sql);


    if ($result)
    {
        $_SESSION['delmsg_events'] = "(Event ID = " . $_GET['event_id'] . ") Event has been successfully deleted!";
        $_SESSION['delmsg_type_events'] = "warning";
        header("location:manage_events.php");
    }
    else
    {
        $_SESSION['delmsg_events'] = "Error! can't delete the record from database";
        $_SESSION['delmsg_type_events'] = "danger";
        header("location:manage_events.php");
    }
}



?>


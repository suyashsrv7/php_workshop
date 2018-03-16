<?php
    require('../connection.php');
    $id = $_GET['id'];
    $query = "DELETE FROM `events` WHERE `id`='$id'";
    if(mysqli_query($conn , $query))
    {
        header("location:ems_admin_events.php");
    }
?>
<?php
    session_start();
    require('connection.php');
    /** 
     * check if the user session is set or not
    */
    if(!isset($_SESSION['user']) && !isset($_SESSION['admin']))
    {
        header('Location:index.php');
    }
    
    /**
     * now retrieve events from events table
    */
    $query = "SELECT * FROM `events` WHERE 1";

    /**
     * make sure connection file is included so that you have access to connection variable $conn
     * follow the following code to retrieve all the events from databse
    */
    $result = mysqli_query($conn , $query);

    /**
     * create a array to store all the events 
     */
    $i = 0;
    while($row = mysqli_fetch_assoc($result))
    {
        $events[$i] = $row;
        $i++;
    }

?>

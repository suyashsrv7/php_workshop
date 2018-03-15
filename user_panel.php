<?php
    session_start();
    require('connection.php');
    /** 
     * check if the user session is set or not
     * if not then redirect to home page
    */
    if(!isset($_SESSION['user']))
    {
        header('Location:index.php');
    }
    
    /**
     * now retrieve events from events table
     * we can do so by using SELECT query
     * using the following query we can select all the events in the database
    */
    $query = "SELECT * FROM `events` WHERE 1";

    /**
     * execute the query using mysqli_query() function
     * make sure connection file is included so that you have access to connection variable $conn
     * whenever we use SELECT method mysql returns row(s) (if any) on successfull execution of query
     * follow the following code to retrieve all the events from databse
    */
    $result = mysql_query($conn , $query);

    /**
     * create a array to store all the events (i.e $events) or rows returned by mysql
     * following code does the same
     * we use $i as a counter variable
     */
    $i = 0;
    while($row = mysqli_fetch_assoc($result))
    {
        $events[$i] = $row;
    }

?>
<a href ='logout.php'>Logout</a>
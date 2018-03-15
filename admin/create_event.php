<?php
require('connection.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $response = null;
        /**
         * validate the requests
         */
        if(empty($title) || empty($description || empty($date)))
        {
            $response = 'Fields cannot be empty';
        }
        else
        {
            /**
             * write query for inserting event into databse
             */
            $query = "INSERT INTO `users` (`title` , `description` , `date`) VALUES ('$title' , '$description' , '$date')";
            if(mysql_query($conn , $query))
            {
                $response = "Event added successfully";
            }
            else
            {
                $response = "Something went wrong";
            }
        }
    }
?>
<?php
    //start session 
    //must be first line of a page
    session_start();
    include_once('connection.php');
    //check the request method
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $response2 = '';
        /**
         * use md5 to encrypt the password and then match it with the password in the databse
         */
        $password= md5($password);
        /**
         * firstly validate the request
         */
        if(empty($email) || empty($password))
        {
            $response2 = 'Fields cannot be empty';
        }
        else
        {
            /**
             * secondly check if the user is admin or not
             * admin is redirected to admin panel
             * write the query to search for the given email and password in admin table
             * following code does the same
             **/
            $query = "SELECT `username`, `password` FROM `admin` WHERE `username`='$email' AND `password`='$password'";

            /**
             * execute the query using mysqli_query() function
             */
            $result = mysqli_query($conn , $query);
            if(mysqli_num_rows($result) > 0)
            {
                $_SESSION['admin'] = $email;
                header('Location:admin/admin_panel.php');
            }

            /**
             * thirdly check if the user exists in your database
             * we use select query to find the user with given email and password
             * you can use sql section of phpmyadmin to write queries
             **/
            $query = "SELECT `email`, `password` FROM `users` WHERE `email`='$email' AND `password`='$password'";
            /**
             * execute the query using musqli_query() function 
             **/
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) > 0)
            {
                //returns the row returned by mysql on exceutionof query as key value pairs
                $row = mysqli_fetch_assoc($result);
                //create session for security
                $_SESSION['user'] = $row['email'];
                //redirect the user to user panel
                header('Location:user_panel.php');
            }
            else
            {
                $response2 = 'Email or Password is wrong';
            }
        }
        

    }
?>
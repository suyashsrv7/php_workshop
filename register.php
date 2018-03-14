<?php
    include_once('connection.php');
    //check the request method
    //use POST method to send data to backend for credentials like email or password
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        //use global variable $_POST[] for retrieving the all requsts
        //index for $_POST[] variable must be same as name attribute of input fields

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //you can validate the data sent from the user using some validations
        if( $name == '' )
        {

        }
        //you can use encryption for password for security
        //there are many encryption functions like md5 , sha1 , sha156 etc
        $password = md5($password);

        //register the user to databse using the connection variable
        //include the connection file for using the connection variable

        //write the query for inserting data into databse
        $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        if( mysqli_query($conn, $query) )
        {
            //redirect to login
        }

    }
?>
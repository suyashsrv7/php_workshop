<!DOCTYPE html>
<?php 
    require('register.php');
    require('login.php');
    /**
     * check if the user visiting this page is a valid user or not 
     * i.e user has logged in or not
     */
    if( isset($_SESSION['user']))
    {
        header('Location:user_panel.php');
    }
    else if(isset($_SESSION['admin']))
    {
        header('Location:admin/admin_panel.php');
    }
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action='index.php' method='post'>
        <?php if(isset($response)){ echo "<span>".$response."</span>";} ?>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Register</button> 
    </form>
    <form action="index.php" method="post">
        <?php if(isset($response2)){ echo "<span>".$response2."</span>";} ?>
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
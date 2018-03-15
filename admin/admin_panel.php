<?php
    session_start();
    require('create_event.php');
    /**
     * check if the user visiting this page is admin or not
     * and has logged in or not
     */
    if(!isset($_SESSION['admin']))
    {
        header('Location:index.php');
    }

?>
<form action="create_event.php" method="post">
    <input type="text" name="title" placeholder="Title"><br>
    <textarea type="text" name="description" placeholder="Description"></textarea><br>
    <input type="date" name="date" placeholder="Date"><br>
    <button type="submit">Create</butto>
</form>
<?php

    $con=mysqli_connect('localhost','root','password','Hospital');

    if(!$con)
    {
        header("Location: index.php");
    }
?>
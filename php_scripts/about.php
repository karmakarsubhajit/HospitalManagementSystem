<?php
    session_start();
    include('../checkDBconn.php');
    include('../checkLoginStatus.php');
    check_loginStatus();
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include "header.php" ?>
    
    <div class="container">

        <div class="text-center" >
            <h2 >
                Database Management System Project
            </h2>
            <br>
            <br>
            <h3>
                Hospital Management System
            </h3>
        </div>
        <div>
            <h3>Team Members</h3>
            <ul>
                <li>Subhajit Karmakar </li>
                <li>Vishal Rao </li>
                <li>Aswin S Vijay </li>
                <li>Duddu Sritha Hadassah</li>
            </ul>
            <br>
            <h3>Project Mentor</h3>
            <ul>
                <li>Sneha Mohan </li>
            </ul>

            <br>
            <h3>Course Instructor</h3>
            <ul>
                <li>Dr. Mrinal Kanti Das </li>
            </ul>

        </div>
    </div>

    </body>
</html>
<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctors Info</title>
		<link rel="stylesheet" href="../styles/options.css">
    </head>
    <body>
        <?php include "../include/header.php" ?>

        <div class="options__container">
            <ul>
                <li> 
                    <a href="view_doctors.php"><div class="option">View Doctors Details</div></a>
                </li>    
                <li> 
                    <a href="add_doctors.php"><div class="option">Add Doctors Details</div></a>
                </li>
                <li> 
                    <a href="update_doctors.php"><div class="option">Update Doctors Details</div></a>
                </li>
                <li> 
                    <a href="delete_doctors.php"><div class="option">Delete Doctors Details</div></a>
                </li>
            </ul>   
        </div>  
    </body>
</html>
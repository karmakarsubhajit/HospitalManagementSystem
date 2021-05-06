<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patients Info</title>
		<link rel="stylesheet" href="../styles/options.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>
    <div class="options__container">
            <ul>
                <li> 
                    <a href="view_patients.php"><div class="option">View Patients Details</div></a>
                </li>    
                <li> 
                    <a href="add_patients.php"><div class="option">Add Patients Details</div></a>
                </li>
                <li> 
                    <a href="update_patients.php"><div class="option">Update Patients Details</div></a>
                </li>
                <li> 
                    <a href="delete_patients.php"><div class="option">Delete Patients Details</div></a>
                </li>
            </ul>   
        </div>   
    </body>
</html>
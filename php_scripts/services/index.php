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
                    <a href="view_services.php"><div class="option">View Services Provided</div></a>
                </li>    
                <li> 
                    <a href="add_services.php"><div class="option">Add New Service </div></a>
                </li>
                <li> 
                    <a href="update_services.php"><div class="option">Update Service Details</div></a>
                </li>
                <li> 
                    <a href="delete_services.php"><div class="option">Delete Services</div></a>
                </li>
                <li> 
                    <a href="avail_services.php"><div class="option">Avail Service</div></a>
                </li>
            </ul>     
        </div>  
    </body>
</html>
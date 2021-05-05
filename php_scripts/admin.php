<?php
    session_start();
    include('../checkDBconn.php');
    include('../checkLoginStatus.php');
    check_loginStatus();
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="./styles/options.css">
    </head>
    <body>
    <?php include "./include/header.php" ?>

    <div class="options__container">
            <ul>
                <li> 
                    <a href="doctors/index.php"><div class="option">Doctors</div></a>
                </li>    
                <li> 
                    <a href="patients/index.php"><div class="option">Patients</div></a>
                </li>
                <li> 
                    <a href="nurses/index.php"><div class="option">Nurses</div></a>
                </li>
                <li> 
                    <a href="appointments/index.php"><div class="option">Appointments</div></a>
                </li>
                <li> 
                    <a href="services/index.php"><div class="option">Services</div></a>
                </li>    
                <li> 
                    <a href="rooms/index.php"><div class="option">Rooms</div></a>
                </li>
                <li> 
                    <a href="medicines/index.php"><div class="option">Medicines</div></a>
                </li>
                <li> 
                    <a href="more_stats/index.php"><div class="option">More Statistics</div></a>
                </li>
            </ul>   
        </div>  
    </body>
</html>
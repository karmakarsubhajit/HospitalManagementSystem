<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rooms Info</title>
		<link rel="stylesheet" href="../styles/options.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>

        <div class="options__container">
            <ul>
                <li> 
                    <a href="view_rooms.php"><div class="option">View Rooms Details</div></a>
                </li>    
                <li> 
                    <a href="add_rooms.php"><div class="option">Add Rooms Details</div></a>
                </li>
                <li> 
                    <a href="delete_rooms.php"><div class="option">Delete Rooms Details</div></a>
                </li>
                <li> 
                    <a href="assign_roomsPatients.php"><div class="option">Assign Patients Rooms</div></a>
                </li>
                <li> 
                    <a href="assign_roomsNurses.php"><div class="option">Assign Nurses Rooms</div></a>
                </li>
                <li> 
                    <a href="viewNurseDuty.php"><div class="option">View Nurse Duty</div></a>
                </li>
            </ul>   
        </div>  
    </body>
</html>
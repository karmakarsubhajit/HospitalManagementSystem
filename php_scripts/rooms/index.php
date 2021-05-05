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
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="view_rooms.php">View Rooms Details</a></span></li>    
                <li> <span><a href="add_rooms.php">Add Rooms Details</a></span></li>
                <li> <span><a href="delete_rooms.php">Delete Rooms Details</a></span></li>
                <li> <span><a href="assign_roomsPatients.php">Assign Patients Rooms</a></span></li>
                <li> <span><a href="assign_roomsNurses.php">Assign Nurses Rooms</a></span></li>
                <li> <span><a href="viewNurseDuty.php">View Nurse Duty</a></span></li> 
            </ul>   
        </div>  
    </body>
</html>
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
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="doctors/index.php"> Doctors </a></span></li>    
                <li><span><a href="patients/index.php"> Patients </a></span></li>
                <li><span><a href="nurses/index.php"> Nurses </a></span></li>
                <li><span><a href ="appointments/index.php"> Appointments </a></span></li>
                <li><span><a href = "services/index.php"> Services</a></span></li>
                <li><span><a href = "rooms/index.php"> Rooms</a></span></li>
                <li><span><a href ="medicines/index.php">Medicines </a> </span> </li>
                <li><span><a href ="more_stats/index.php">More Stats </a> </span> </li>
             </ul>   
        </div>  
    </body>
</html>
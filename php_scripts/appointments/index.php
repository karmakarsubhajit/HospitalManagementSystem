<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Appointment Info</title>
		<link rel="stylesheet" href="../styles/options.css">
    </head>
    <body>
        <div class="options__container">
            <ul>
                <li> 
                    <a href="view_appointments.php"><div class="option">View Appointment Details</div></a>
                </li>    
                <li> 
                    <a href="book_appointments.php"><div class="option">Book Appointment</div></a>
                </li>
                <li> 
                    <a href="update_appointment_status.php"><div class="option">Update Appointment Status</div></a>
                </li>
                <li> 
                    <a href="delete_appoinment.php"><div class="option">Delete Appointment</div></a>
                </li>
            </ul>   
        </div>  
    </body>
</html>
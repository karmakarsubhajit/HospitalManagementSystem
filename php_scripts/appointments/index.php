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
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="view_appointments.php">View Appointment Details</a></span></li>    
                <li> <span><a href="book_appointments.php">Book Appointment</a></span></li>
                <li> <span><a href="update_appointment_status.php">Update Appointment Status</a></span></li>
                <li> <span><a href="delete_appoinment.php">Delete Appoinment</a></span></li>
                
            </ul>   
        </div>  
    </body>
</html>
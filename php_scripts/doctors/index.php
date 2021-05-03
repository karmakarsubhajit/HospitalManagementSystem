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
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="view_doctors.php">View Doctors Details</a></span></li>    
                <li> <span><a href="add_doctors.php">Add Doctors Details</a></span></li>
                <li> <span><a href="update_doctors.php">Update Doctors Details</a></span></li>
                <li> <span><a href="delete_doctors.php">Delete Doctors Details</a></span></li>
                
            </ul>   
        </div>  
    </body>
</html>
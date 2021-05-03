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
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="view_patients.php">View Patients Details</a></span></li>    
                <li> <span><a href="add_patients.php">Add Patients Details</a></span></li>
                <li> <span><a href="update_patients.php">Update Patients Details</a></span></li>
                <li> <span><a href="delete_patients.php">Delete Patients Details</a></span></li>
            </ul>   
        </div>  
    </body>
</html>
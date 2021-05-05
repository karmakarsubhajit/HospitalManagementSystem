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
                <li><span><a href="view_services.php">View Services Provided</a></span></li>    
                <li> <span><a href="add_services.php">Add New Service</a></span></li>
                <li> <span><a href="update_services.php">Update Service Details</a></span></li>
                <li> <span><a href="delete_services.php">Delete Service</a></span></li>
                <li> <span><a href="avail_services.php">Avail Service</a></span></li>
                
            </ul>   
        </div>  
    </body>
</html>
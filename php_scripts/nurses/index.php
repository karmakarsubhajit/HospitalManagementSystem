<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nurses Info</title>
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="view_nurses.php">View Nurses Details</a></span></li>    
                <li> <span><a href="add_nurses.php">Add Nurses Details</a></span></li>
                <li> <span><a href="update_nurses.php">Update Nurses Details</a></span></li>
                <li> <span><a href="delete_nurses.php">Delete Nurses Details</a></span></li>
            </ul>   
        </div>  
    </body>
</html>
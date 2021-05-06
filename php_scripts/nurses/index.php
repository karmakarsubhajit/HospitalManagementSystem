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
		<link rel="stylesheet" href="../styles/options.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>
    <div class="options__container">
            <ul>
                <li> 
                    <a href="view_nurses.php"><div class="option">View Nurses Details</div></a>
                </li>    
                <li> 
                    <a href="add_nurses.php"><div class="option">Add Nurses Details</div></a>
                </li>
                <li> 
                    <a href="update_nurses.php"><div class="option">Update Nurses Details</div></a>
                </li>
                <li> 
                    <a href="delete_nurses.php"><div class="option">Delete Nurses Details</div></a>
                </li>
            </ul>   
        </div>  
    </body> 
    </body>
</html>
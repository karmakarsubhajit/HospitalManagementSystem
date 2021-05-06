<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Medicines Info</title>
		<link rel="stylesheet" href="../styles/options.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>
        <div class="options__container">
            <ul>
                <li> 
                    <a href="view_medicines.php"><div class="option">View Medicine Details</div></a>
                </li>    
                <li> 
                    <a href="add_medicines.php"><div class="option">Add Medicine Details</div></a>
                </li>
                <li> 
                    <a href="update_medicines.php"><div class="option">Update Medicine Details</div></a>
                </li>
                <li> 
                    <a href="delete_medicines.php"><div class="option">Delete Medicine Details</div></a>
                </li>
                <li> 
                    <a href="view_inventory.php"><div class="option">Inventory details</div></a>
                </li>
                <li> 
                    <a href="add_to_inventory.php"><div class="option">Add medicine to Inventory</div></a>
                </li>
                <li> 
                    <a href="buy_medicines.php"><div class="option">Buy Medicines</div></a>
                </li>
            </ul>   
        </div> 
    </body>
</html>
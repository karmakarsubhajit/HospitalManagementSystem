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
    </head>
    <body>
        <div>
            <ul>
                <li><span><a href="view_medicines.php">View Medicine Details</a></span></li>    
                <li><span><a href="add_medicines.php">Add Medicine Details</a></span></li>
                <li><span><a href="update_medicines.php">Update Medicine Details</a></span></li>
                <li><span><a href="delete_medicines.php">Delete Medicine Details</a></span></li>
                <li><span><a href="view_inventory.php">Inventory details</a></span></li>
                <li><span><a href="add_to_inventory.php">Add medicine to Inventory</a></span></li>
                <li><span><a href="buy_medicines.php">Buy Medicines</a></span></li>
                
            </ul>   
        </div>  
    </body>
</html>
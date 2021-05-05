<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Add to Inventory </title>
    </head>
    <body>
        
 <h2>Add medicine to inventory! </h2>
 <form method="post" action="insert_item_to_inventory.php">									
		<div>
			<label for="medicineID">
			Medicine  ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>

		<div>
			<label for="Quantity">
				Quantity
			</label>
			<input type="text" name="Quantity"  placeholder="Enter Quantity">
		</div>

														
	<button type="submit" name="submit" >
		Add Item
	</button>
	</form>
												

    </body>

</html>
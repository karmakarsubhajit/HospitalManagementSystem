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
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
	<?php include "../include/header.php" ?>
 <h2 class="main__heading">Add medicine to inventory! </h2>
 <form method="post" action="insert_item_to_inventory.php">		
	<div class="form__container">
		<div class="block">
			<label for="medicineID">
			Medicine  ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>

		<div class="block">
			<label for="Quantity">
				Quantity
			</label>
			<input type="text" name="Quantity"  placeholder="Enter Quantity">
		</div>
											
		<button id="submit__button" type="submit" name="submit" >
			Add Item
		</button>
	</div>
	</form>
												

    </body>

</html>
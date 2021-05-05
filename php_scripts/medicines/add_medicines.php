<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Add medicines </title>
    </head>
    <body>
        
 <h2>Add medicines! </h2>
 <form method="post" action="insert_medicine.php">									
		<div>
			<label for="medicineID">
			Medicine  ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>

		<div>
			<label for="medicineName">
				Medicine Name
			</label>
			<input type="text" name="Medicine_Name"  placeholder="Enter Medicine Name">
		</div>

		<div>
			<label for="Price">
				Price
			</label>
			<input type="text" name="Price"  placeholder="Enter Price">
		</div>


		<div>
			<label for="expiryDate">
				 Expiry Date
			</label>
			<input type="text" name="Expiry_Date"  placeholder="Enter Expiry Date">
		</div>

		<div>
			<label for="Supplier">
				Suppplier
			</label>
			<input type="text" name="Supplier"  placeholder="Enter Supplier">
		</div>

	
														
	<button type="submit" name="submit" >
		Add Medicine
	</button>
	</form>
												

    </body>

</html>
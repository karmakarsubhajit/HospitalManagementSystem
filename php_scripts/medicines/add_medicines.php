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
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Add medicines! </h2>
 <form method="post" action="insert_medicine.php">		
	<div class="form__container">
		<div class="block">
			<label for="medicineID">
			Medicine  ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>

		<div class="block">
			<label for="medicineName">
				Medicine Name
			</label>
			<input type="text" name="Medicine_Name"  placeholder="Enter Medicine Name">
		</div>

		<div class="block">
			<label for="Price">
				Price
			</label>
			<input type="text" name="Price"  placeholder="Enter Price">
		</div>


		<div class="block">
			<label for="expiryDate">
				 Expiry Date
			</label>
			<input type="text" name="Expiry_Date"  placeholder="Enter Expiry Date">
		</div>

		<div class="block">
			<label for="Supplier">
				Suppplier
			</label>
			<input type="text" name="Supplier"  placeholder="Enter Supplier">
		</div>
												
		<button id="submit__button" type="submit" name="submit" >
			Add Medicine
		</button>
	</div>
</form>
</body>

</html>
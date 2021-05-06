<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Nurses </title>
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>
 <h2 class="main__heading">Add Nurses! </h2>
 <form method="post" action="insert_nurse.php">	
	<div class="form__container">
		<div class="block">
			<label for="nurseID">
				ID
			</label>
			<input type="text" name="Nurse_ID"  placeholder="Enter Nurse ID">
		</div>

		<div class="block">
			<label for="nurseName">
				Name
			</label>
			<input type="text" name="Name"  placeholder="Enter Nurse Name">
		</div>

		<div class="block">
			<label for="nurseDOB">
				DOB
			</label>
			<input type="text" name="DOB"  placeholder="Enter DOB">
		</div>


		<div class="block">
			<label for="nurseGender">
				 Gender
			</label>
			<input type="text" name="Gender"  placeholder="Enter Gender">
		</div>


		<div class="block">
			<label for="nurseAddress">
				Address
			</label>
			<input type="text" name="Address"  placeholder="Enter Address">
		</div>

		<div class="block">
			<label for="nurseEmail">
				Email
			</label>
			<input type="text" name="Email"  placeholder="Enter Email">
		</div>

		<div class="block">
			<label for="nurseContact">
				Contact No
			</label>
			<input type="text" name="Contact_No"  placeholder="Enter Contact No">
		</div>
														
		<button id="submit__button" type="submit" name="submit" >
			Add Nurse
		</button>
	</div>
</form>
</body>

</html>
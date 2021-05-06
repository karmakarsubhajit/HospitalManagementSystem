<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Patients </title>
		<link rel="stylesheet" href="../styles/update_emp.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>
 <h2 class="main__heading">Update Patient! </h2>
 <form method="post" action="update_patientDetails.php">		
 	<div class="form__container">
		<div class="block">
			<label for="patientID">
				ID
			</label>
			<input type="text" name=" Patient_ID"  placeholder="Enter Patient ID">
		</div>

		<div class="block">
			<label for="patientName">
				Name
			</label>
			<input type="text" name="Name"  placeholder="Enter Patient Name">
		</div>

		<div class="block">
			<label for="patientDOB">
				DOB
			</label>
			<input type="text" name="DOB"  placeholder="Enter DOB">
		</div>

		<div class="block">
			<label for="patientGender">
				 Gender
			</label>
			<input type="text" name="Gender"  placeholder="Enter Gender">
		</div>

		<div class="block">
			<label for="patientAddress">
				Address
			</label>
			<input type="text" name="Address"  placeholder="Enter Address">
		</div>

		<div class="block">
			<label for="patientEmail">
				Email
			</label>
			<input type="text" name="Email"  placeholder="Enter Email">
		</div>

		<div class="block">
			<label for="patientContact">
				Contact No
			</label>
			<input type="text" name="Contact_No"  placeholder="Enter Contact No">
		</div>

        <div class="block">
			<label for="patientMedicalHistory">
				Medical History
			</label>
			<input type="text" name="Medical_History"  placeholder="Enter Medical History">
		</div>
														
		<button id="submit__button" type="submit" name="submit" >
			Update Patient
		</button>
	</div>
</form>
</body>

</html>
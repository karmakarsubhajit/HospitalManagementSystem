<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Patients </title>
    </head>
    <body>
        
 <h2>Add Patients! </h2>
 <form method="post" action="insert_patient.php">		

		<div>
			<label for="patientID">
				ID
			</label>
			<input type="text" name=" Patient_ID"  placeholder="Enter Patient ID">
		</div>

		<div>
			<label for="patientName">
				Name
			</label>
			<input type="text" name="Name"  placeholder="Enter Patient Name">
		</div>

		<div>
			<label for="patientDOB">
				DOB
			</label>
			<input type="text" name="DOB"  placeholder="Enter DOB">
		</div>

		<div>
			<label for="patientGender">
				 Gender
			</label>
			<input type="text" name="Gender"  placeholder="Enter Gender">
		</div>

		<div>
			<label for="patientAddress">
				Address
			</label>
			<input type="text" name="Address"  placeholder="Enter Address">
		</div>

		<div>
			<label for="patientEmail">
				Email
			</label>
			<input type="text" name="Email"  placeholder="Enter Email">
		</div>

		<div>
			<label for="patientContact">
				Contact No
			</label>
			<input type="text" name="Contact_No"  placeholder="Enter Contact No">
		</div>

        <div>
			<label for="patientMedicalHistory">
				Medical History
			</label>
			<input type="text" name="Medical_History"  placeholder="Enter Medical History">
		</div>
														
	<button type="submit" name="submit" >
		Add Patient
	</button>
	</form>
												

    </body>

</html>
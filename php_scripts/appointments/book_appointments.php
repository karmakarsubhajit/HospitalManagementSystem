<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Book Appointments </title>
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Book Appointments!</h2>
 <form method="post" action="insert_appointment.php">	
 	<div class="form__container">
        <div class="block">
			<label for="appID">
			  Appointment ID
			</label>
			<input type="text" name="App_ID"  placeholder="Enter Appointment ID">
		</div>

		<div class="block">
			<label for="patientID">
			  Patient ID
			</label>
			<input type="text" name="Patient_ID"  placeholder="Enter Patient ID">
		</div>

		<div class="block">
			<label for="doctorID">
				Doctor ID
			</label>
			<input type="text" name="Doctor_ID"  placeholder="Enter Doctor ID">
		</div>

		<div class="block">
			<label for="status">
				status
			</label>
			<input type="text" name="status"  placeholder="Enter status">
		</div>						

		<button id="submit__button" type="submit" name="submit" >
			Book 
		</button>
	</div>
</form>
</body>

</html>
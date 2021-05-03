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
    </head>
    <body>
        
 <h2>Book Appointments!</h2>
 <form method="post" action="insert_appointment.php">		
        <div>
			<label for="appID">
			  Appointment ID
			</label>
			<input type="text" name="App_ID"  placeholder="Enter Appointment ID">
		</div>

		<div>
			<label for="patientID">
			  Patient ID
			</label>
			<input type="text" name="Patient_ID"  placeholder="Enter Patient ID">
		</div>

		<div>
			<label for="doctorID">
				Doctor ID
			</label>
			<input type="text" name="Doctor_ID"  placeholder="Enter Doctor ID">
		</div>

		<div>
			<label for="status">
				status
			</label>
			<input type="text" name="status"  placeholder="Enter status">
		</div>

	
														
	<button type="submit" name="submit" >
		Book 
	</button>
	</form>
												

    </body>

</html>
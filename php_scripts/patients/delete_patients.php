<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete Patients </title>
    </head>
    <body>
        
 <h2>Delete Patients! </h2>
 <form method="post" action="remove_patient.php">									
		<div>
			<label for="patientID">
				ID
			</label>
			<input type="text" name="Patient_ID"  placeholder="Enter Patient ID">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Patient
	</button>
	</form>
												

    </body>

</html>
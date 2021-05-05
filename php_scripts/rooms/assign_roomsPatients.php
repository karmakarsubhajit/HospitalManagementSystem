<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Assign Rooms to Patients</title>
    </head>
    <body>
        
 <h2>Assign Room! </h2>
 <form method="post" action="insert_patientInRoom.php">		

		<div>
			<label for="patientID">
				Patient ID
			</label>
			<input type="text" name=" Patient_ID"  placeholder="Enter Patient ID">
		</div>

		<div>
			<label for="Room No">
				Room No
			</label>
			<input type="text" name="Room_No"  placeholder="Enter Room No ">
		</div>
												
	<button type="submit" name="submit" >
		Assign Patient
	</button>
	</form>
												

    </body>

</html>
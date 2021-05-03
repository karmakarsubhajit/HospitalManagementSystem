<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete Appointments </title>
    </head>
    <body>
        
 <h2>Delete Appointments! </h2>
 <form method="post" action="remove_appointment.php">									
		<div>
			<label for="AppID">
				Appointment ID
			</label>
			<input type="text" name="App_ID"  placeholder="Enter Appointment ID">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Appointment
	</button>
	</form>
												

    </body>

</html>
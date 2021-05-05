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
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Delete Appointments! </h2>
 <form method="post" action="remove_appointment.php">	
 	<div class="form__container">
		<div class="block">
			<label for="AppID">
				Appointment ID
			</label>
			<input type="text" name="App_ID"  placeholder="Enter Appointment ID">
		</div>
										
		<button id="submit__button" type="submit" name="submit" >
			Delete Appointment
		</button>
	</div>
</form>
</body>

</html>
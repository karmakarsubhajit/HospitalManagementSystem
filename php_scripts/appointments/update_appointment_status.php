<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Uodate Appointment Status </title>
    </head>
    <body>
        
 <h2>Update Appointment Status! </h2>
 <form method="post" action="update_appointmentDetails.php">									
		<div>
			<label for="appID">
				Appointment ID
			</label>
			<input type="text" name="App_ID"  placeholder="Enter Appointment ID">
		</div>
        <div>
            <label for="status">
                Appointment Status
            </label>
            <input type ="text" name ="status" placeholder="Enter Appointment Status">
        </div>
												
	<button type="submit" name="submit" >
		Update Appointment Status
	</button>
	</form>
												

    </body>

</html>
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
		<link rel="stylesheet" href="../styles/update_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Update Appointment Status! </h2>
 <form method="post" action="update_appointmentDetails.php">		
 	<div class="form__container">
		<div class="block">
			<label for="appID">
				Appointment ID
			</label>
			<input type="text" name="App_ID"  placeholder="Enter Appointment ID">
		</div>
        <div class="block">
            <label for="status">
                Appointment Status
            </label>
            <input type ="text" name ="status" placeholder="Enter Appointment Status">
        </div>
												
        <button id="submit__button" type="submit" name="submit" >
            Update Appointment Status
        </button>
    </div>
</form>
</body>

</html>
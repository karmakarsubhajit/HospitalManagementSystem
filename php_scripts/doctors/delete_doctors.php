<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete doctors </title>
    </head>
    <body>
        
 <h2>Delete doctors! </h2>
 <form method="post" action="remove_doctor.php">									
		<div>
			<label for="doctorID">
				ID
			</label>
			<input type="text" name="Doctor_ID"  placeholder="Enter Doctor ID">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Doctor
	</button>
	</form>
												

    </body>

</html>
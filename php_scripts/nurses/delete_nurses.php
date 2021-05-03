<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete Nurses </title>
    </head>
    <body>
        
 <h2>Delete Nurses! </h2>
 <form method="post" action="remove_nurse.php">									
		<div>
			<label for="nurseID">
				ID
			</label>
			<input type="text" name="Nurse_ID"  placeholder="Enter Nurse ID">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Nurse
	</button>
	</form>
												

    </body>

</html>
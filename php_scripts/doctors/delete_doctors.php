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
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Delete doctors! </h2>
 <form method="post" action="remove_doctor.php">
 	<div class="form__container">
		<div class="block">
			<label for="doctorID">
				ID
			</label>
			<input type="text" name="Doctor_ID"  placeholder="Enter Doctor ID">
		</div>									
		<button id="submit__button" type="submit" name="submit" >
			Delete Doctor
		</button>
	</div>
</form>
</body>

</html>
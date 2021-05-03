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
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Delete Patients! </h2>
 <form method="post" action="remove_patient.php">
	<div class="form__container">
		<div class="block">
			<label for="patientID">
				ID
			</label>
			<input type="text" name="Patient_ID"  placeholder="Enter Patient ID">
		</div>
							
		<button id="submit__button" type="submit" name="submit" >
			Delete Patient
		</button>
	</div>
</form>
</body>

</html>
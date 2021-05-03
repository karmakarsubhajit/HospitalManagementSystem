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
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Delete Nurses! </h2>
 <form method="post" action="remove_nurse.php">
	<div class="form__container">
		<div class="block">
			<label for="nurseID">
				ID
			</label>
			<input type="text" name="Nurse_ID"  placeholder="Enter Nurse ID">
		</div>
												
		<button id="submit__button" type="submit" name="submit" >
			Delete Nurse
		</button>
	</div>
</form>
 </body>

</html>
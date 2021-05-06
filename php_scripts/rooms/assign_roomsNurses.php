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
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
	<?php include "../include/header.php" ?>

 <h2 class="main__heading">Assign Room! </h2>
 <form method="post" action="insert_nurseInRoom.php">		
 	<div class="form__container">
		<div class="block">
			<label for="nurseID">
				Nurse ID
			</label>
			<input type="text" name="Nurse_ID"  placeholder="Enter Nurse ID">
		</div>

		<div class="block">
			<label for="Room No">
				Room No
			</label>
			<input type="text" name="Room_No"  placeholder="Enter Room No ">
		</div>
												
		<button id="submit__button" type="submit" name="submit" >
			Assign Nurse
		</button>
	<div>
</form>
</body>

</html>
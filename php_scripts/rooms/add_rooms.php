<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Rooms </title>
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
 <?php include "../include/header.php" ?>
 <h2 class="main__heading">Add Rooms! </h2>
 <form method="post" action="insert_room.php">		
 	<div class="form__container">
		<div class="block">
			<label for="roomNo">
				Room No
			</label>
			<input type="text" name="Room_No"  placeholder="Enter Room No">
		</div>

		<div class="block">
			<label for="floorNo">
				Floor No
			</label>
			<input type="text" name="Floor_No"  placeholder="Enter Floor No">
		</div>
												
		<button id="submit__button" type="submit" name="submit" >
			Add Room
		</button>
	</div>
</form>
</body>

</html>
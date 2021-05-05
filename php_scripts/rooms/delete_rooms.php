<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete Rooms </title>
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Delete Rooms! </h2>
 <form method="post" action="remove_room.php">	
 	<div class="form__container">							
		<div class="block">
			<label for="Room_No">
				Room No
			</label>
			<input type="text" name="Room_No"  placeholder="Enter Room No">
		</div>
											
		<button id="submit__button" type="submit" name="submit" >
			Delete Room 
		</button>
	</div>
</form>
</body>

</html>
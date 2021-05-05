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
    </head>
    <body>
        
 <h2>Add Rooms! </h2>
 <form method="post" action="insert_room.php">		

		<div>
			<label for="roomNo">
				Room No
			</label>
			<input type="text" name="Room_No"  placeholder="Enter Room No">
		</div>

		<div>
			<label for="floorNo">
				Floor No
			</label>
			<input type="text" name="Floor_No"  placeholder="Enter Floor No">
		</div>
												
	<button type="submit" name="submit" >
		Add Room
	</button>
	</form>
												

    </body>

</html>
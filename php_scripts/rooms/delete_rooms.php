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
    </head>
    <body>
        
 <h2>Delete Rooms! </h2>
 <form method="post" action="remove_room.php">									
		<div>
			<label for="Room_No">
				Room No
			</label>
			<input type="text" name="Room_No"  placeholder="Enter Room No">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Room 
	</button>
	</form>
												

    </body>

</html>
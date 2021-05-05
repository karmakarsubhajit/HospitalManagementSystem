<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete services </title>
    </head>
    <body>
        
 <h2>Delete services! </h2>
 <form method="post" action="remove_service.php">									
		<div>
			<label for="serviceID">
				ID
			</label>
			<input type="text" name="Service_ID"  placeholder="Enter Service ID">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Service
	</button>
	</form>
												

    </body>

</html>
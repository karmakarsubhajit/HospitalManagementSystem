<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Add services </title>
    </head>
    <body>
        
 <h2>Add services! </h2>
 <form method="post" action="insert_service.php">									
		<div>
			<label for="serviceID">
				ID
			</label>
			<input type="text" name="Service_ID"  placeholder="Enter Service ID">
		</div>

		<div>
			<label for="serviceName">
				Service Name
			</label>
			<input type="text" name="Service_Name"  placeholder="Enter Service Name">
		</div>

		<div>
			<label for="cost">
				Cost
			</label>
			<input type="text" name="Cost"  placeholder="Enter Cost">
		</div>
														
	<button type="submit" name="submit" >
		Add Service
	</button>
	</form>
												

    </body>

</html>
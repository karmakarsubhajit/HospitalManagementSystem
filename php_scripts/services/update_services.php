<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Services </title>
    </head>
    <body>
        
 <h2>Update Service! </h2>
 <form method="post" action="update_serviceDetails.php">									
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
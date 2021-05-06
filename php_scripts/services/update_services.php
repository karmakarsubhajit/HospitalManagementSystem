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
		<link rel="stylesheet" href="../styles/update_emp.css">
    </head>
    <body>
	<?php include "../include/header.php" ?>

 <h2 class="main__heading">Update Service! </h2>
 <form method="post" action="update_serviceDetails.php">
 	<div class="form__container">
		<div class="block">
			<label for="serviceID">
				ID
			</label>
			<input type="text" name="Service_ID"  placeholder="Enter Service ID">
		</div>

		<div class="block">
			<label for="serviceName">
				Service Name
			</label>
			<input type="text" name="Service_Name"  placeholder="Enter Service Name">
		</div>

		<div class="block">
			<label for="cost">
				Cost
			</label>
			<input type="text" name="Cost"  placeholder="Enter Cost">
		</div>
														
		<button id="submit__button" type="submit" name="submit" >
			Add Service
		</button>
	</div>
	</form>
    </body>

</html>
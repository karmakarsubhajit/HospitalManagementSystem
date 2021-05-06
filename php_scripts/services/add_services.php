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
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
	<?php include "../include/header.php" ?>
 <h2 class="main__heading">Add services! </h2>
 <form method="post" action="insert_service.php">	
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
														
		<button id="submit__button" id="submit__button" type="submit" name="submit" >
			Add Service
		</button>
	</div>
</form>
</body>

</html>
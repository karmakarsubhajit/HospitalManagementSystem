<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Buy Services </title>
		<link rel="stylesheet" href="../styles/add_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Buy Services! </h2>
 <form method="post" action="avail_serviceDetails.php">	
	<div class="form__container">
		<div class="block">
			<label for="Patient_ID">
				Patient ID
			</label>
			<input type="text" name="Patient ID"  placeholder="Enter Patient ID">
		</div>

		<div class="block">
			<label for="Service ID">
				Service ID
			</label>
			<input type="text" name="Service_ID"  placeholder="Enter Service ID">
		</div>
												
		<button id="submit__button" type="submit" name="submit" >
			Buy
		</button>
	<div>
</form>
</body>

</html>
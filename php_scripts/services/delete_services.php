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
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
        
 <h2 class="main__heading">Delete services! </h2>
 <form method="post" action="remove_service.php">	
	<div class="form__container">
		<div class="block">
			<label for="serviceID">
				ID
			</label>
			<input type="text" name="Service_ID"  placeholder="Enter Service ID">
		</div>
										
		<button id="submit__button" type="submit" name="submit" >
			Delete Service
		</button>
</form>
</body>

</html>
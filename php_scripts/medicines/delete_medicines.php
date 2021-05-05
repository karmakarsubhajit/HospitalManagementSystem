<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete medicines </title>
    </head>
    <body>
        
 <h2>Delete medicine! </h2>
 <form method="post" action="remove_medicine.php">									
		<div>
			<label for="medicineID">
				ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>

		
														
	<button type="submit" name="submit" >
		Delete Medicine
	</button>
	</form>
												

    </body>

</html>
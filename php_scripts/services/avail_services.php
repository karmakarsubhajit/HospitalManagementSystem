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
    </head>
    <body>
        
 <h2>Buy Services! </h2>
 <form method="post" action="avail_serviceDetails.php">									
		<div>
			<label for="Patient_ID">
				Patient ID
			</label>
			<input type="text" name="Patient ID"  placeholder="Enter Patient ID">
		</div>

		<div>
			<label for="Service ID">
				Service ID
			</label>
			<input type="text" name="Service_ID"  placeholder="Enter Service ID">
		</div>
												
	<button type="submit" name="submit" >
		Buy
	</button>
	</form>
												

    </body>

</html>
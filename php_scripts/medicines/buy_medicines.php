<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Buy Medicines </title>
    </head>
    <body>
        
 <h2>Buy Medicines! </h2>
 <form method="post" action="buy_medicineDetails.php">									
		<div>
			<label for="Patient_ID">
				Patient ID
			</label>
			<input type="text" name="Patient ID"  placeholder="Enter Patient ID">
		</div>

		<div>
			<label for="Medicine_ID">
				Medicine ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>
												
	<button type="submit" name="submit" >
		Buy
	</button>
	</form>
												

    </body>

</html>
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
		<link rel="stylesheet" href="../styles/update_emp.css">
    </head>
    <body>
    <?php include "../include/header.php" ?>  
 <h2 class="main__heading">Buy Medicines! </h2>
 <form method="post" action="buy_medicineDetails.php">
 	<div class="form__container">
		<div class="block">
			<label for="Patient_ID">
				Patient ID
			</label>
			<input type="text" name="Patient ID"  placeholder="Enter Patient ID">
		</div>

		<div class="block">
			<label for="Medicine_ID">
				Medicine ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>
												
		<button id="submit__button" type="submit" name="submit" >
			Buy
		</button>
	</div>
	</form>
												

    </body>

</html>
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
		<link rel="stylesheet" href="../styles/delete_emp.css">
    </head>
    <body>
	<?php include "../include/header.php" ?> 
 <h2 class="main__heading">Delete medicine! </h2>
 <form method="post" action="remove_medicine.php">		
 	<div class="form__container">
		<div class="block">
			<label for="medicineID">
				ID
			</label>
			<input type="text" name="Medicine_ID"  placeholder="Enter Medicine ID">
		</div>
											
		<button id="submit__button" type="submit" name="submit" >
			Delete Medicine
		</button>
	</div>
	</form>
												

    </body>

</html>
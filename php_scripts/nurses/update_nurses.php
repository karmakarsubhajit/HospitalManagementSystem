<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Nurses </title>
    </head>
    <body>
        
 <h2>Update Nurses! </h2>
 <form method="post" action="update_nurseDetails.php">									
		<div>
			<label for="nurseID">
				ID
			</label>
			<input type="text" name="Nurse_ID"  placeholder="Enter Nurse ID">
		</div>

		<div>
			<label for="nurseName">
				Name
			</label>
			<input type="text" name="Name"  placeholder="Enter Nurse Name">
		</div>

		<div>
			<label for="nurseDOB">
				DOB
			</label>
			<input type="text" name="DOB"  placeholder="Enter DOB">
		</div>


		<div>
			<label for="nurseGender">
				 Gender
			</label>
			<input type="text" name="Gender"  placeholder="Enter Gender">
		</div>


		<div>
			<label for="nurseAddress">
				Address
			</label>
			<input type="text" name="Address"  placeholder="Enter Address">
		</div>

		<div>
			<label for="nurseEmail">
				Email
			</label>
			<input type="text" name="Email"  placeholder="Enter Email">
		</div>

		<div>
			<label for="nurseContact">
				Contact No
			</label>
			<input type="text" name="Contact_No"  placeholder="Enter Contact No">
		</div>
														
	<button type="submit" name="submit" >
		Update Nurse
	</button>
	</form>
												

    </body>

</html>
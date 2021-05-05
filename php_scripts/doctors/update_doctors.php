<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Uodate doctors </title>
    </head>
    <body>
        
 <h2>Update doctors! </h2>
 <form method="post" action="update_doctorDetails.php">									
		<div>
			<label for="doctorID">
				ID
			</label>
			<input type="text" name="Doctor_ID"  placeholder="Enter Doctor ID">
		</div>

		<div>
			<label for="doctorName">
				DName
			</label>
			<input type="text" name="Name"  placeholder="Enter Doctor Name">
		</div>

		<div>
			<label for="doctorDOB">
				DOB
			</label>
			<input type="text" name="DOB"  placeholder="Enter DOB">
		</div>


		<div>
			<label for="doctorGender">
				 Gender
			</label>
			<input type="text" name="Gender"  placeholder="Enter Gender">
		</div>

		<div>
			<label for="doctorSpecialization">
				Specialization
			</label>
			<input type="text" name="Specialization"  placeholder="Enter Specialization">
		</div>

		<div>
			<label for="doctorYearsOfExperience">
				 Years of Experience
			</label>
			<input type="text" name="Years_Of_Experience"  placeholder="Enter Years_Of_Experience">
		</div>

		<div>
			<label for="doctorAddress">
				Address
			</label>
			<input type="text" name="Address"  placeholder="Enter Address">
		</div>

		<div>
			<label for="doctorEmail">
				Email
			</label>
			<input type="text" name="Email"  placeholder="Enter Email">
		</div>

		<div>
			<label for="doctorContact">
				Contact No
			</label>
			<input type="text" name="Contact_No"  placeholder="Enter Contact No">
		</div>
														
	<button type="submit" name="submit" >
		Update Doctor Details
	</button>
	</form>
												

    </body>

</html>
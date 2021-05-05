<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Update doctors </title>
		<link rel="stylesheet" href="../styles/update_emp.css">
    </head>
    <body>
	<?php include "../include/header.php" ?>
        
 <h2 class="main__heading">Update doctors! </h2>
 <form method="post" action="update_doctorDetails.php">					
 	<div class="form__container">
		<div class="block">
			<label for="doctorID">
				ID
			</label>
			<input type="text" name="Doctor_ID"  placeholder="Enter Doctor ID">
		</div>

		<div class="block">
			<label for="doctorName">
				DName
			</label>
			<input type="text" name="Name"  placeholder="Enter Doctor Name">
		</div>

		<div class="block">
			<label for="doctorDOB">
				DOB
			</label>
			<input type="text" name="DOB"  placeholder="Enter DOB">
		</div>


		<div class="block">
			<label for="doctorGender">
				 Gender
			</label>
			<input type="text" name="Gender"  placeholder="Enter Gender">
		</div>

		<div class="block">
			<label for="doctorSpecialization">
				Specialization
			</label>
			<input type="text" name="Specialization"  placeholder="Enter Specialization">
		</div>

		<div class="block">
			<label for="doctorYearsOfExperience">
				 Years of Experience
			</label>
			<input type="text" name="Years_Of_Experience"  placeholder="Enter Years_Of_Experience">
		</div>

		<div class="block">
			<label for="doctorAddress">
				Address
			</label>
			<input type="text" name="Address"  placeholder="Enter Address">
		</div>

		<div class="block">
			<label for="doctorEmail">
				Email
			</label>
			<input type="text" name="Email"  placeholder="Enter Email">
		</div>

		<div class="block">
			<label for="doctorContact">
				Contact No
			</label>
			<input type="text" name="Contact_No"  placeholder="Enter Contact No">
		</div>
														
		<button id="submit__button"  type="submit" name="submit" >
			Update Doctor Details
		</button>
	</div>
</form>
</body>

</html>
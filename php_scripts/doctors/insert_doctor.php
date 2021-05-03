<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<?php
$conn = mysqli_connect("localhost","root","password","Hospital");
if($conn->connect_error)
{
	die("Return to previous page:".$conn->connect_error);
}

$doctorID=$_POST['Doctor_ID'];
$doctorName=$_POST['Name'];
$doctorDOB=$_POST['DOB'];
$doctorGender=$_POST['Gender'];
$doctorSpecialization=$_POST['Specialization'];
$doctorYears_Of_Experience=$_POST['Years_Of_Experience'];
$doctorAddress=$_POST['Address'];
$doctorEmail=$_POST['Email'];
$doctorContactno=$_POST['Contact_No'];


$sql= "call add_doctor('$doctorID','$doctorName','$doctorDOB','$doctorGender','$doctorSpecialization', '$doctorYears_Of_Experience', '$doctorAddress' , '$doctorEmail','$doctorContactno')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Doctor added succesfully! </h2> ";
}
else{
    echo "<h2> Oops Doctor couldn't be added! </h2>" ; 
}
?> 

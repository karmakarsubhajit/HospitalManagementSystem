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

$patientID=$_POST['Patient_ID'];
$patientName=$_POST['Name'];
$patientDOB=$_POST['DOB'];
$patientGender=$_POST['Gender'];
$patientAddress=$_POST['Address'];
$patientEmail=$_POST['Email'];
$patientContactno=$_POST['Contact_No'];
$patientMedicalHistory=$_POST['Medical_History'];


$sql= "call add_patient('$patientID','$patientName','$patientDOB','$patientGender', '$patientAddress' , '$patientEmail','$patientContactno','$patientMedicalHistory')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Patient added succesfully! </h2> ";
}
else{
    echo "<h2> Oops Patient couldn't be added! </h2>" ; 
}
?> 

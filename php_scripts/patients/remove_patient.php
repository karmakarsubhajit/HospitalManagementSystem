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



$sql= "call delete_Patient ('$patientID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Patient deleted successfully! </h2> ";
}
else{
    echo "<h2> Oops Patient couldn't be deleted! </h2>" ; 
}
?> 

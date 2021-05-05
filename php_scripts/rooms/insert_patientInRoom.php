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

$roomNo=$_POST['Room_No'];
$patientID=$_POST['Patient_ID'];


$sql= "call assign_roomPatient('$roomNo','$patientID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Patient assigned a room succesfully! </h2> ";
}
else{
    echo "<h2> Oops Patient couldn't be assigned a room! </h2>" ; 
}
?> 

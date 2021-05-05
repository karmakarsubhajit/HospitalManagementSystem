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
$nurseID=$_POST['Nurse_ID'];


$sql= "call assign_roomNurse('$roomNo','$nurseID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Nurse assigned a room succesfully! </h2> ";
}
else{
    echo "<h2> Oops Nurse couldn't be assigned a room! </h2>" ; 
}
?> 

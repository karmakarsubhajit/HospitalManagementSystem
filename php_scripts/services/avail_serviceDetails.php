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
$serviceID=$_POST['Service_ID'];


$sql= "call buy_service('$patientID','$serviceID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Service bought succesfully! </h2> ";
}
else{
    echo "<h2> Oops Service couldn't be bought! </h2>" ; 
}
?> 

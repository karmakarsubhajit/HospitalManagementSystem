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

$appID=$_POST['App_ID'];
$sql= "call delete_Appointment('$appID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Appointment deleted successfully! </h2> ";
}
else{
    echo "<h2> Oops Appointment couldn't be deleted! </h2>" ; 
}
?> 

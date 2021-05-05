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
$medicineID=$_POST['Medicine_ID'];
$sql= "call buy_medicine('$patientID','$medicineID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Medicine bought succesfully! </h2> ";
}
else{
    echo "<h2> Oops Medicine couldn't be bought! </h2>" ; 
}
?> 

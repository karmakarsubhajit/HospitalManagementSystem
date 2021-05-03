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

$nurseID=$_POST['Nurse_ID'];



$sql= "call delete_Nurse ('$nurseID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Nurse deleted succesfully! </h2> ";
}
else{
    echo "<h2> Oops Nurse couldn't be deleted! </h2>" ; 
}
?> 


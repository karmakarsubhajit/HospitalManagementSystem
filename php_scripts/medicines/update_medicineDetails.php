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

$medicineID=$_POST['Medicine_ID'];
$medicineName=$_POST['Medicine_Name'];
$Price=$_POST['Price'];
$expiryDate=$_POST['Expiry_Date'];
$Supplier=$_POST['Supplier'];


$sql= "call update_medicine('$medicineID','$medicineName','$Price','$expiryDate','$Supplier')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Medicine details updated succesfully! </h2> ";
}
else{
    echo "<h2> Oops Medicine details couldn't be updated! </h2>" ; 
}
?> 

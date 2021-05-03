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



$sql= "call delete_doctor ('$doctorID') ";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Doctor deleted succesfully! </h2> ";
}
else{
    echo "<h2> Oops Doctor couldn't be deleted! </h2>" ; 
}
?> 

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

$serviceID=$_POST['Service_ID'];



$sql= "call delete_service('$serviceID')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Service deleted succesfully! </h2> ";
}
else{
    echo "<h2> Oops Service couldn't be deleted! </h2>" ; 
}
?> 

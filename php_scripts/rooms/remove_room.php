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


$sql= "call delete_room ('$roomNo')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Room deleted successfully! </h2> ";
}
else{
    echo "<h2> Oops Room couldn't be deleted! </h2>" ; 
}
?> 

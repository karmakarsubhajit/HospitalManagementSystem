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
$floorNo=$_POST['Floor_No'];


$sql= "call add_room('$roomNo','$floorNo')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Room added succesfully! </h2> ";
}
else{
    echo "<h2> Oops Room couldn't be added! </h2>" ; 
}
?> 

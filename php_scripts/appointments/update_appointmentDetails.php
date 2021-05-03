<?php
    session_start();
    include('../../checkDBConn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<?php
$conn = mysqli_connect("localhost","root","password","Hospital");
if($conn->connect_error)
{
    die("Return to previous page".conn->connect_error);
}

$appID = $_POST['App_ID'];
$status =$_POST['status'];

$sql = "call update_appointment('$appID','$status')";
$ans = $conn->query($sql);

if($ans)
{
    echo "<h2>Appointment Status updated succesfully! </h2> ";
}
else{
    echo "<h2> Oops Appointment Status couldn't be updated! </h2>" ; 
}
?> 
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
    die("Return to previous page: ".$conn->connect_error);
}       

$App_ID = $_POST['App_ID'];
$Patient_ID = $_POST['Patient_ID'];
$Doctor_ID = $_POST['Doctor_ID'];
$status = $_POST['status'];

$sql = "call book_appointment('$App_ID','$Patient_ID','$Doctor_ID','$status')";

$ans =$conn->query($sql);

if($ans)
{
    echo "<h2>Appointment Booked succesfully! </h2>";
}
else
{
    echo "<h2>Oops Patient couldn't be added!</h2>";
}

?>
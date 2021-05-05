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
$quantity=$_POST['Quantity'];

$sql= "call add_item('$medicineID','$quantity')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Item added succesfully! </h2> ";
}
else{
    echo "<h2> Oops Item couldn't be added! </h2>" ; 
}
?> 

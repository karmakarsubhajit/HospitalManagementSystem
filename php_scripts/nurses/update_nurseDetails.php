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
$nurseName=$_POST['Name'];
$nurseDOB=$_POST['DOB'];
$nurseGender=$_POST['Gender'];
$nurseAddress=$_POST['Address'];
$nurseEmail=$_POST['Email'];
$nurseContactno=$_POST['Contact_No'];


$sql= "call update_nurse ( '$nurseID','$nurseName', '$nurseDOB', '$nurseGender', '$nurseAddress' , '$nurseEmail', '$nurseContactno')";


$ans = $conn->query($sql);
if($ans)
{
    echo "<h2>Nurse updated succesfully! </h2> ";
}
else{
    echo "<h2> Oops Nurse couldn't be updated! </h2>" ; 
}
?> 

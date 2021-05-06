<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Details of Rooms</title>
	<link rel="stylesheet" href="../styles/view_emp.css">
</head>
<body>
        <?php include "../include/header.php" ?>
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);

        } 
        $command = "SELECT * FROM Rooms";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2 id='main_heading'>Rooms info</h2>";    
                echo "<table>";
                echo "<tr>";
                echo "<th><em class='header_row'> Room No </em></th>";
                echo "<th><em class='header_row'>Floor No</em></th>";
                echo "</tr>";
                echo "<hr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                echo "<tr>";
                echo "<td class='other_row'>" .$table_row['Room_No']. "</td>";
                echo "<td class='other_row'>" .$table_row['Floor_No']. "</td>";
                echo "</tr>";
            }
                echo "</table>";
        }
         else
         {
            echo "<h2>Sorry no patients here</h2>";     
         }?>


</body>
</html>

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
</head>
<body>
        <?php include "../include/header.php" ?>
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);

        } 
        $command = "SELECT * FROM view_lookAfter";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>View Duty of Nurses </h2>";    
            echo "<table>";
                echo "<tr>";
                echo "<th><em> Room No </em></th>";
                echo "<th><em> Patient Name</em></th>";
                echo "<th><em> Nurse Name</em></th>";
                echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                 echo "<tr>";
                 echo "<td>" .$table_row['Room_No']. "</td>";
                 echo "<td>" .$table_row['Patient_Name']. "</td>";
                 echo "<td>" .$table_row['Nurse_Name']. "</td>";
                 echo "</tr>";
            }
                  echo "</table>";
        }
         else
         {
            echo "Sorry no patients here";     
         }?>


</body>
</html>

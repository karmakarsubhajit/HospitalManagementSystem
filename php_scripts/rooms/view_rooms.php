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
        $command = "SELECT * FROM Rooms";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>Rooms info</h2>";    
            echo "<table>";
                echo "<tr>";
                echo "<th><em> Room No </em></th>";
                echo "<th><em>Floor No</em></th>";
                echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                 echo "<tr>";
                 echo "<td>" .$table_row['Room_No']. "</td>";
                echo "<td>" .$table_row['Floor_No']. "</td>";
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

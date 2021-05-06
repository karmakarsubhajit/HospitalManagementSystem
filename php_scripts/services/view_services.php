<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Details of services table</title>
</head>
<body>
        <?php include "../include/header.php" ?>
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);

        } 
        $command = "SELECT * FROM Services";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>Services info</h2>";    
            echo "<table>";
                echo "<tr>";
                echo "<th><em> Service_ID </em></th>";
                echo "<th><em>Service_Name</em></th>";
                echo "<th><em>Cost</em></th>";
                echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                 echo "<tr>";
                 echo "<td>" .$table_row['Service_ID']. "</td>";
                echo "<td>" .$table_row['Service_Name']. "</td>";
                echo "<td>" .$table_row['Cost']. "</td>";
                echo "</tr>";
            }
                  echo "</table>";
        }
         else
         {
            echo "Sorry no services available";     
         }?>


</body>
</html>

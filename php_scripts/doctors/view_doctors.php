<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Details of doctors table</title>
</head>
<body>
    <?php include "../include/header.php" ?>
    
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);
            
        } 
        $command = "SELECT * FROM Doctors";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>Doctors info</h2>";    
            echo "<table>";
                echo "<tr>";
                echo "<th><em> Doctor_ID </em></th>";
                echo "<th><em>Name</em></th>";
                echo "<th><em>DOB</em></th>";
                echo "<th><em>Gender</em></th>";
                echo "<th><em>Specialization</em></th>";
                echo "<th><em>Years_Of_Experience</em></th>";
                echo "<th><em>Address</em></th>";
                echo "<th><em>Email</em></th>";
                echo "<th><em>Contact_No</em></th>";
                echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                 echo "<tr>";
             echo "<td>" .$table_row['Doctor_ID']. "</td>";
             echo "<td>" .$table_row['Name']. "</td>";
             echo "<td>" .$table_row['DOB']. "</td>";
            echo "<td>" .$table_row['Gender']. "</td>";
            echo "<td>" .$table_row['Specialization']. "</td>";
            echo "<td>" .$table_row['Years_Of_Experience']. "</td>";
            echo "<td>" .$table_row['Address']. "</td>";
            echo "<td>" .$table_row['Email']. "</td>";
            echo "<td>" .$table_row['Contact_No']. "</td>";
                echo "</tr>";
            }
                  echo "</table>";
        }
         else
         {
            echo "Sorry no doctors here";     
         }?>


</body>
</html>

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
	<link rel="stylesheet" href="../styles/view_emp.css">
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
                echo "<h2 id='main_heading'>Doctors info</h2>";    
                echo "<table>";
                echo "<tr>";
                echo "<th><em class='header_row'> Doctor_ID </em></th>";
                echo "<th><em class='header_row'>Name</em></th>";
                echo "<th><em class='header_row'>DOB</em></th>";
                echo "<th><em class='header_row'>Gender</em></th>";
                echo "<th><em class='header_row'>Specialization</em></th>";
                echo "<th><em class='header_row'>Years_Of_Experience</em></th>";
                echo "<th><em class='header_row'>Address</em></th>";
                echo "<th><em class='header_row'>Email</em></th>";
                echo "<th><em class='header_row'>Contact_No</em></th>";
                echo "</tr>";
                echo "<hr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                echo "<tr>";
                echo "<td class='other_row'>" .$table_row['Doctor_ID']. "</td>";
                echo "<td class='other_row'>" .$table_row['Name']. "</td>";
                echo "<td class='other_row'>" .$table_row['DOB']. "</td>";
                echo "<td class='other_row'>" .$table_row['Gender']. "</td>";
                echo "<td class='other_row'>" .$table_row['Specialization']. "</td>";
                echo "<td class='other_row'>" .$table_row['Years_Of_Experience']. "</td>";
                echo "<td class='other_row'>" .$table_row['Address']. "</td>";
                echo "<td class='other_row'>" .$table_row['Email']. "</td>";
                echo "<td class='other_row'>" .$table_row['Contact_No']. "</td>";
                echo "</tr>";
            }
                echo "</table>";
        }
         else
         {
            echo "<h2>Sorry no doctors here</h2>";     
         }?>


</body>
</html>

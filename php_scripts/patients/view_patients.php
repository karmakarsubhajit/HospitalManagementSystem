<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Details of patients table</title>
</head>
<body>
    
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);

        } 
        $command = "SELECT * FROM Patients";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>Patients info</h2>";    
            echo "<table>";
                echo "<tr>";
                echo "<th><em> Patient_ID </em></th>";
                echo "<th><em>Name</em></th>";
                echo "<th><em>DOB</em></th>";
                echo "<th><em>Gender</em></th>";
                echo "<th><em>Address</em></th>";
                echo "<th><em>Email</em></th>";
                echo "<th><em>Contact_No</em></th>";
                echo "<th><em>Medical_History</em></th>";
                echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                 echo "<tr>";
             echo "<td>" .$table_row['Patient_ID']. "</td>";
             echo "<td>" .$table_row['Name']. "</td>";
             echo "<td>" .$table_row['DOB']. "</td>";
            echo "<td>" .$table_row['Gender']. "</td>";
            echo "<td>" .$table_row['Address']. "</td>";
            echo "<td>" .$table_row['Email']. "</td>";
            echo "<td>" .$table_row['Contact_No']. "</td>";
            echo "<td>" .$table_row['Medical_History']. "</td>";
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

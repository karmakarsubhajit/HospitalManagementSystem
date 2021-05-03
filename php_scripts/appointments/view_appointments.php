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
    
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);

        } 
        $sql = "SELECT * FROM view_appointments";
        $ans = $conn->query($sql);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>Booked Appointments</h2>";    
                echo "<table>";
                echo "<tr>";
                echo "<th><em>Patient_Name</em></th>";
                echo "<th><em>Doctor_Name</em></th>";
                echo "<th><em>Booked_on</em></th>";
                echo "<th><em>Status</em></th>";
                echo "</tr>";
                while($table_row = mysqli_fetch_array($ans))
                {
                    echo "<tr>";
                    echo "<td>" .$table_row['Patient']. "</td>";
                    echo "<td>" .$table_row['Doctor']. "</td>";
                    echo "<td>" .$table_row['Booked_on']. "</td>";
                    echo "<td>" .$table_row['Status']. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }
         else
         {
            echo "Sorry no Apoointments booked yet";     
         }?>


</body>
</html>

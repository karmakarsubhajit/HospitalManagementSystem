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
        $sql = "SELECT * FROM view_appointments";
        $ans = $conn->query($sql);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2 id='main_heading'>Booked Appointments</h2>";    
                echo "<table>";
                echo "<tr>";
                echo "<th><em class='header_row'>Patient_Name</em></th>";
                echo "<th><em class='header_row'>Doctor_Name</em></th>";
                echo "<th><em class='header_row'>Booked_on</em></th>";
                echo "<th><em class='header_row'>Status</em></th>";
                echo "</tr>";
                echo "<hr>";
                while($table_row = mysqli_fetch_array($ans))
                {
                    echo "<tr>";
                    echo "<td class='other_row'>" .$table_row['Patient']. "</td>";
                    echo "<td class='other_row'>" .$table_row['Doctor']. "</td>";
                    echo "<td class='other_row'>" .$table_row['Booked_on']. "</td>";
                    echo "<td class='other_row'>" .$table_row['Status']. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }
         else
         {
            echo "<h2>Sorry no Apoointments booked yet</h2>";     
         }?>


</body>
</html>

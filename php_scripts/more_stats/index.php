<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctors Info</title>
    </head>
    <body>
    <?php include "../include/header.php" ?>
        <div>
            <div>  
                <?php 
                $conn = mysqli_connect("localhost","root","password","Hospital");
                if($conn->connect_error)
                {
                    die("Return to previous page:".$conn->connect_error);
                }
                $command = "SELECT total_revenue()";
                $ans = $conn->query($command);
                if(mysqli_num_rows($ans) > 0)
                {
                    echo "<h2>Total Revenue of the Hospital</h2>";    
                    echo "<table>";
                    echo "<tr>";
                    echo "</tr>";
                    while($table_row = mysqli_fetch_array($ans))
                    {
                        echo "<tr>";
                        echo "<td>" .$table_row['total_revenue()']. "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "Sorry no info available";     
                }?>
            </div>
            <div>  
                <?php 
                $conn = mysqli_connect("localhost","root","password","Hospital");
                if($conn->connect_error)
                {
                    die("Return to previous page:".$conn->connect_error);
                }
                $command = "SELECT total_employee()";
                $ans = $conn->query($command);
                if(mysqli_num_rows($ans) > 0)
                {
                    echo "<h2>Total No of Nurses in the Hospital</h2>";    
                    echo "<table>";
                    echo "<tr>";
                    echo "</tr>";
                    while($table_row = mysqli_fetch_array($ans))
                    {
                        echo "<tr>";
                        echo "<td>" .$table_row['nurse_count()']. "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "Sorry no info available";     
                }?>
            </div>
               
        </div>  
    </body>
</html>
<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>More stats</title>
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
                $command = "SELECT count_patients()";
                $ans = $conn->query($command);
                if(mysqli_num_rows($ans) > 0)
                {
                    echo "<h2>No of the patients admitted</h2>";    
                    echo "<table>";
                    echo "<tr>";
                    echo "</tr>";
                    while($table_row = mysqli_fetch_array($ans))
                    {
                        echo "<tr>";
                        echo "<td>" .$table_row['count_patients()']. "</td>";
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
                $command = "SELECT count_doctors()";
                $ans = $conn->query($command);
                if(mysqli_num_rows($ans) > 0)
                {
                    echo "<h2>No of Doctors working in the Hospital</h2>";    
                    echo "<table>";
                    echo "<tr>";
                    echo "</tr>";
                    while($table_row = mysqli_fetch_array($ans))
                    {
                        echo "<tr>";
                        echo "<td>" .$table_row['count_doctors()']. "</td>";
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
                $command = "SELECT count_nurses()";
                $ans = $conn->query($command);
                if(mysqli_num_rows($ans) > 0)
                {
                    echo "<h2>No of Nurses working in the Hospital</h2>";    
                    echo "<table>";
                    echo "<tr>";
                    echo "</tr>";
                    while($table_row = mysqli_fetch_array($ans))
                    {
                        echo "<tr>";
                        echo "<td>" .$table_row['count_nurses()']. "</td>";
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
                $command = "SELECT count_appointments()";
                $ans = $conn->query($command);
                if(mysqli_num_rows($ans) > 0)
                {
                    echo "<h2>No of appointments pending</h2>";    
                    echo "<table>";
                    echo "<tr>";
                    echo "</tr>";
                    while($table_row = mysqli_fetch_array($ans))
                    {
                        echo "<tr>";
                        echo "<td>" .$table_row['count_appointments()']. "</td>";
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
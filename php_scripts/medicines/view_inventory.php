<?php
    session_start();
    include('../../checkDBconn.php');
    include('../../checkLoginStatus.php');
    check_loginStatus();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Details of Medicines</title>
	<link rel="stylesheet" href="../styles/view_emp.css">
</head>
<body>
<?php include "../include/header.php" ?>
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);
            
        } 
        $command = "SELECT * FROM view_inventory";
        $ans = $conn->query($command);
        if(mysqli_num_rows($ans) > 0)
        {
            echo "<h2 id='main_heading'>Stock info</h2>";    
            echo "<table>";
            echo "<tr>";
            echo "<th><em class='header_row'> Medicine_ID </em></th>";
            echo "<th><em class='header_row'> Medicine_Name </em></th>";
            echo "<th><em class='header_row'>Stock</em></th>";
            echo "</tr>";
            echo "<hr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                echo "<tr>";
                echo "<td class='other_row'>" .$table_row['Medicine_ID']. "</td>";
                echo "<td class='other_row'>" .$table_row['Name']. "</td>";
                echo "<td class='other_row'>" .$table_row['stock']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<h2>Sorry no stock left</h2>";     
        }?>


</body>
</html>

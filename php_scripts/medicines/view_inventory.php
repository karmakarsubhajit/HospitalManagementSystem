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
            echo "<h2>Stock info</h2>";    
            echo "<table>";
            echo "<tr>";
            echo "<th><em> Medicine_ID </em></th>";
            echo "<th><em> Medicine_Name </em></th>";
            echo "<th><em>Stock</em></th>";
            echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                echo "<tr>";
                echo "<td>" .$table_row['Medicine_ID']. "</td>";
                echo "<td>" .$table_row['Name']. "</td>";
                echo "<td>" .$table_row['stock']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "Sorry no stock left";     
        }?>


</body>
</html>

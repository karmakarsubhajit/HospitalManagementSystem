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
    
        <?php $conn = mysqli_connect("localhost","root","password","Hospital");
        if($conn->connect_error)
        {
            die("Return to previous page:".$conn-> connect_error);
            
        } 
        $command = "SELECT * FROM Medicines";
        $ans = $conn->query($command);
        if(mysqli_num_rows($ans) > 0)
        {
            echo "<h2>Medicines info</h2>";    
            echo "<table>";
            echo "<tr>";
            echo "<th><em> Medicine ID </em></th>";
            echo "<th><em>Name</em></th>";
            echo "<th><em>Price</em></th>";
            echo "<th><em>Expiry Date</em></th>";
            echo "<th><em>Supplier</em></th>";
            echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                echo "<tr>";
                echo "<td>" .$table_row['Medicine_ID']. "</td>";
                echo "<td>" .$table_row['Name']. "</td>";
                echo "<td>" .$table_row['Price']. "</td>";
                echo "<td>" .$table_row['Expiry_Date']. "</td>";
                echo "<td>" .$table_row['Supplier']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "Sorry no Medicine here";     
        }?>


</body>
</html>

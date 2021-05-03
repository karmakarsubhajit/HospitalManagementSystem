<!DOCTYPE html>
<html>
<head>
    <title>Details of student table</title>
</head>
<body>
    
        <?php $conn = mysqli_connect("localhost","root","password","university");
        if($conn->connect_error)
        {
            die("Failed connection:".$conn-> connect_error);

        } 
        $command = "SELECT * FROM student";
        $ans = $conn->query($command);
            if(mysqli_num_rows($ans) > 0)
            {
                echo "<h2>Details of student table</h2>";    
            echo "<table>";
                echo "<tr>";
                echo "<th><em> ID </em></th>";
                echo "<th><em>name</em></th>";
                echo "<th><em>dept_name</em></th>";
                echo "<th><em>tot_cred</em></th>";
                echo "</tr>";
            while($table_row = mysqli_fetch_array($ans))
            {
                 echo "<tr>";
             echo "<td>" .$table_row['ID']. "</td>";
             echo "<td>" .$table_row['name']. "</td>";
            echo "<td>" .$table_row['dept_name']. "</td>";
            echo "<td>" .$table_row['tot_cred']. "</td>";
                echo "</tr>";
            }
                  echo "</table>";
        }
         else
         {
            echo "Empty Query";     
         }?>


</body>
</html>

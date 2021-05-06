<?php
    session_start();
    include('../checkDBconn.php');
    include('../checkLoginStatus.php');
    check_loginStatus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./styles/contact.css">
    </head>
    <body>
    <?php include "header.php" ?>

        <div class="jumbotron">
            <div><h2>Developers Contact </h2></div>
                <br>
                

            <div>   
                
            <ul class="color-with-marker list-group">
                <li class = "list-group-item">Subhajit Karmakar
                    <ul>
                    <li>111801041@smail.iitpkd.ac.in</li>
                    </ul>
                </li>
                <br>
                <li class = "list-group-item">Vishal Rao
                    <ul>
                    <li>111801046@smail.iitpkd.ac.in</li>
                    </ul>
                </li>

                <br>

                <li class = "list-group-item">Aswin S Vijay
                    <ul>
                    <li>111801007@smail.iitpkd.ac.in</li>
                    </ul>
                </li>

                <br>

                <li class = "list-group-item">Duddu Sritha Hadassah
                    <ul>
                    <li>111801012@smail.iitpkd.ac.in</li>
                    </ul>
                </li>

            </ul>

            </div>
        </div>
      
    </body>
</html>
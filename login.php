<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Hospital Management System</title>
	<link rel="stylesheet" href="./php_scripts/styles/login2.css">

</head>
<body>
    <div class="container">
        <h3 id="welcome">Welcome to Hospital Management System </h3> 
        <!-- <h3 id="to"> to </h3>
        <h3 id="hms"> Hospital Management System </h3> -->
        <form action="verify.php" method="post">
            <div class="form">
                <input class="row" id="username" type="text" name="UserName" placeholder=" User Name" class="form-control mb-3">
                <input class="row" id="password" type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                <button class="row" id="submit__button" name="Login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

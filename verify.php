<?php 
require_once('checkDBconn.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UserName']) || empty($_POST['Password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where UserName='".$_POST['UserName']."' and Password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UserName'];
                header("location:php_scripts/admin.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        header("location:index.php");
    }

?>
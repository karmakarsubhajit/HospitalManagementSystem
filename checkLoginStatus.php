<?php
function check_loginStatus()
{
    if(strlen($_SESSION['User'])==0)
        {		
            $_SESSION['User']="";
            header("Location: index.php");
        }
    }
?>
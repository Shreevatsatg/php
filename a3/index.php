<?php          
session_start();         
if(isset($_SESSION["uname"])){             
    header("Location: welcome.php");             
    exit();         }             
    else if(isset($_POST["login"])){            
         $_SESSION["uname"]=$_POST["uname"];             
         $_SESSION["pass"]=$_POST["pass"];             
         header("Location: welcome.php");             
         exit(); 
        } 
    ?> 
    <form method="post"> 
        <h1>Login Form</h1><br> 
        Username : <input type="text" name="uname" required><br> 
        Password: <input type="password" name="pass" required><br> 
        <input type="submit" name="login" value="Login"> 
    </form> 

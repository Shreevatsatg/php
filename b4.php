<h1>Login Page</h1> 
    <form method="post"> 
        Username: <input type="text" name="username"><br><br> 
        Password: <input type="password" name="password"><br><br> 
        <input type="submit" name="submit"> 
    </form>     
    <?php         
    if(isset($_POST["submit"])){             
        $username = $_POST["username"];             
        $password = $_POST["password"];             
        try{                 
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
                $con=new mysqli("localhost","root","","phpdb");                 
                $res=$con->query("select * from usercred where uname='$username' and pass='$password'");                 
                if($res->num_rows > 0)                     
                    echo "Login successful. Welcome, $username!";                
                else                      
                    echo "Invalid username or password."; 
            }             catch(Exception $e){                 
                echo $e->getMessage(); 
            } 
        } 
?>
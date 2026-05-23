<h1>Age Calculator</h1><br> 
    <form method="post"> 
        Enter your date of Birth: <input type="date" name="dob" required> 
        <input type="submit" value="Calculate age" name="submit"><br> 
    </form> 
 
    <?php     if (isset($_POST["submit"])) { 
        $dob = new DateTime($_POST["dob"]);         $currentDate = new DateTime();         if ($dob > $currentDate) 
            echo "Please select valid date ";         else { 
            $age = $dob->diff($currentDate); 
            echo "<b>Your age is $age->y years $age->m months $age->d days<b>";         } 
    }     ?> 
 

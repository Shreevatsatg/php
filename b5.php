<h2>Feedback Form</h2> 
        <form method="post"> 
            Name: <input type="text" name="name" required><br><br> 
            Email: <input type="email" name="email" required><br><br> 
            Subject: <input type="text" name="subject" required><br><br> 
            Message:<br> 
            <textarea name="message" rows="5" cols="30" required></textarea><br><br> 
            <input type="submit" name="submit" value="Submit Feedback"> 
        </form>         
        <?php             
        if (isset($_POST["submit"])) {                 
            $name = $_POST["name"]; 
                $email = $_POST["email"]; 
                $subject = $_POST["subject"]; 
                $message = $_POST["message"]; 
                 try { 
                    $con = new mysqli("localhost", "root", "", "phpdb"); 
                    $res = $con->query("insert into feedback values ('$name', '$email', '$subject', '$message')");                     
                    if ($res)                         
                        echo "Feedback submitted successfully.";                     
                     else                         
                        echo "Error while submitting feedback."; 
                        } 
                catch (Exception $e) {                     
                    echo $e->getMessage(); 
                } 
            }         
            ?> 
 

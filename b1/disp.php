<?php 
    $hobbies = isset($_POST['hobbies']) ? implode(', ', $_POST['hobbies']) : 'None';      
    echo "<h1>Student Registration Details</h1><br>             
<b>First Name:</b>".$_POST['fname']."<br> 
            <b>Last Name:</b> ".$_POST['lname']."<br> 
            <b>Address:</b> ".$_POST['address']." <br> 
            <b>E-Mail:</b> ".$_POST['email']." <br> 
            <b>Mobile:</b> ".$_POST['mobile']." <br> 
            <b>City:</b> ".$_POST['city']." <br> 
            <b>State:</b> ".$_POST['state']." <br> 
            <b>Gender:</b> ".$_POST['gender']." <br> 
            <b>Hobbies:</b> $hobbies <br> 
            <b>Blood Group:</b> ".$_POST['blood_group']." <br>"; 
?> 

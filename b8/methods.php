 <?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);     
    $con = new mysqli("localhost","root","","phpdb"); 
     function addHotel($roomNo,$roomType,$capacity){         
        global $con; 
        $sql = "INSERT INTO hotel VALUES($roomNo, '$roomType', $capacity,'Available')"; 
        $con->query($sql);         
        echo "Hotel added successfully."; 
    }      function display($status){         
        global $con; 
        $result = $con->query("SELECT * FROM hotel WHERE status='$status'");         
        if($result->num_rows > 0){ 
            echo "<table border=1><tr><th>Room No</th><th>Room Type</th><th>Capacity</th></tr>";             
            while($row=$result->fetch_array()) 
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";             
            echo "</table>"; 
        } else              
        echo "No records found."; 
    }     function updateStatus($roomNo, $status){         
        global $con; 
        $sql = "UPDATE hotel SET status='$status' WHERE roomNo=$roomNo"; 
        $con->query($sql);         
        if($con->affected_rows > 0) 
            echo "Status updated successfully.";         
        else  
            echo "$roomNo not found."; 
    } 
    function getStatus($roomNo){         
        global $con; 
        $sql="select status from hotel where roomNo=$roomNo"; 
        $result=$con->query($sql);         
        if($result->num_rows>0){ 
            $result=$result->fetch_array();             
            return $result[0]; 
        }         return "Invalid"; 
    } 
    ?> 
 

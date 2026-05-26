<form method="post"> 
        <H1>Add Room Details</H1> 
        Room No:<input type="number" name="roomNo"><br><br> 
        Room Type:<select name="roomType"> 
            <option value="Single">Single</option> 
            <option value="Double">Double</option> 
            <option value="Semi">Semi</option> 
            <option value="Deluxe">Deluxe</option> 
            <option value="Dormitory">Dormitory</option> 
        </select><br><br>    
        Capacity:<input type="number" name="capacity"><br><br> 
        <button name="action" value="add">Add Room</button><br><br> 
        <h1>Check In Check Out</h1> 
        Enter room number: <input type="text" name="rNo"> 
        <button name="action" value="Booked">CheckIn</button><br><br> 
        <button name="action" value="Available">CheckOut</button> 
    </form> <?php     
    try { 
        require("method.php");         
        if (isset($_POST["action"])){             
            $action = $_POST["action"];             
            if($action=="add"){                 
                echo $_POST["roomNo"];                 
                addHotel($_POST["roomNo"], $_POST["roomType"], $_POST["capacity"]); 
            }             else{ 
                $currentStatus=getStatus($_POST['rNo']);                 
                if($currentStatus==$action)                     
                    echo "Room is already $action.";                 
                elseif($currentStatus=="Invalid") 
                    echo "Invalid room number.";                 
                else{                     
                    updateStatus($_POST['rNo'], $action);                     
                    echo "<br>Room status updated to $action."; 
                } 
            }         
            }         
            echo "<h2>Current Available Room Details</h2>";         
            display("Available");         
            echo "<h2>Current booked Room Details</h2>";         
            display("Booked");     
            } catch (Exception $e) {         
                if ($e->getCode() == 1062)             
                    echo " Room already exists!";         
                else             
                    echo  $e; 
    } 
?> 

index.php 
<h1>Customer Management</h1> 
<form method="post"> 
    <button name="action" value="add.php">Add</button> 
    <button name="action" value="delete.php">Delete</button> 
    <button name="action" value="search.php">Search</button> 
    <button name="action" value="sort">Sort</button> 
    <button name="action" value="display">Display</button> 
</form> 
 
<?php 
if (isset($_POST["action"])) {     
    try {         
        require("methods.php");         
        $action = $_POST["action"];         
        if ($action == "sort")              
            display("SELECT * FROM customers ORDER BY cid");         
        else if ($action == "display")              
            display("SELECT * FROM customers");         
        else              
            header("Location: $action"); 
    } catch (Exception $e) {         
        echo $e; 
    } 
 
} ?> 

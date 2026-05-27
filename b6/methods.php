<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "phpdb");

function addCustomer($cid, $cname, $item, $mobile)
{
    global $con;
    $sql = "INSERT INTO customers VALUES ($cid, '$cname', '$item', $mobile)";
    $con->query($sql);
    echo "Customer added successfully.";
}
function display($query)
{
    global $con;
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        echo "<table border=1> 
          	<tr> 
          	<th>ID</th> 
         	<th>Name</th>           	
            <th>Item</th> 
          	<th>Mobile</th> 
          	</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>              
            <td>$row[0]</td> 
             <td>$row[1]</td> 
             <td>$row[2]</td> 
             <td>$row[3]</td> 
             </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}
function deleteCustomer($cid)
{
    global $con;
    $sql = "DELETE FROM customers WHERE cid=$cid";
    $con->query($sql);
    if ($con->affected_rows > 0)
        echo "Customer deleted successfully.";
    else
        echo "$cid not found.";
} ?> add.php
<form method="post">
    Customer ID:<input type="number" name="cid" required><br><br>
    Name:<input type="text" name="cname" required><br><br>
    Item:<input type="text" name="item" required><br><br>
    Mobile:<input type="number" name="mobile" required><br><br>
    <input type="submit" name="save" value="Add Customer">
    <a href="index.php">Back to Home</a>
</form>
<?php
if (isset($_POST["save"])) {
    try {
        require("methods.php");
        addCustomer($_POST["cid"], $_POST["cname"], $_POST["item"], $_POST["mobile"]);
    } catch (Exception $e) {
        echo $e;
    }
}
?>
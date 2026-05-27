<form method="post">
    Enter Customer ID to delete: <input type="number" name="cid" required><br><br>
    <input type="submit" value="Delete" name="delete">
    <a href="index.php">Back to Home</a>
</form> <?php
if (isset($_POST["delete"])) {
    try {
        require("methods.php");
        deleteCustomer($_POST["cid"]);
    } catch (Exception $e) {
        echo $e;
    }
} ?> search.php (Same as delete.php)
<form method="post">
    Enter Customer ID to search: <input type="number" name="cid" required><br><br>
    <input type="submit" value="Search" name="search">
    <a href="index.php">Back to Home</a>
</form> <?php
if (isset($_POST["search"])) {
    try {
        require("methods.php");
        $cid = $_POST["cid"];
        display("SELECT * FROM customers WHERE cid = $cid");
    } catch (Exception $e) {
        echo $e;
    }
} ?>
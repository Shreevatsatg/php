<h1>Book Shopping</h1> 
    <pre> 
        <form method="POST"> 
            Enter book number: <input type="number" name="books" required><br><br> 
            Enter book title: <input type="text" name="title" required><br><br> 
            Enter price: <input type="number" name="price" required><br><br>             Enter quantity: <input type="number" name="quantity" required><br><br> 
            Book Code: <select name="code" required> 
                <option value="0.15">101</option> 
                <option value="0.20">102</option> 
                <option value="0.25">103</option> 
                <option value="0.05">Other</option> 
            </select><br><br> 
            <input type="submit" name="generate" value="Generate Bill"> 
        </form> 
    </pre> <?php if (isset($_POST["generate"])) {     $bookNumber = $_POST["books"]; 
    $bookTitle = $_POST["title"]; 
    $price = $_POST["price"]; 
    $quantity = $_POST["quantity"]; 
    $disc_per = $_POST["code"]; 
 
    $totalPrice = $price * $quantity; 
    $discountAmount = $totalPrice * floatval($disc_per); 
    $netBillAmount = $totalPrice - $discountAmount; 
     echo "<h2>Bill Details</h2><br>Book Number: $bookNumber<br>Book Title: 
$bookTitle<br>Price: $price<br> 
    Quantity: $quantity<br>Total Price: $totalPrice<br> 
    Discount Amount: $discountAmount<br>Net Bill Amount: $netBillAmount<br>"; 
     try {         mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
        $conn = new mysqli("localhost", "root", "", "phpdb");  
        $sql = "INSERT INTO bills VALUES ($bookNumber, '$bookTitle', $price, 
$quantity, $totalPrice, $discountAmount, $netBillAmount)"; 
         if ($conn->query($sql))              echo "Bill data stored successfully.";         else              echo "Error";     } catch (Exception $e) {         echo $e; 
    } 
} ?> 

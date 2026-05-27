<h1>PHP Calculator</h1>
<form method="post">
    <input type="text" name="num1" placeholder="Enter first number" required>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="num2" placeholder="Enter second number" required>
    <input type="submit" value="Calculate" name="submit">

    <?php
    if (isset($_POST["submit"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["operator"];
        $result = "";
        if (!is_numeric($num1) || !is_numeric($num2))
            $result = "Please enter a numberic value<br>";
        else {
            switch ($op) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if ($num2 == 0)
                        $result = "Division By Zero Error";
                    else
                        $result = $num1 / $num2;
                    break;
            }
        }
        echo $result;
    }
    ?>
</form>
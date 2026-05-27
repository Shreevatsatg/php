<h2>Armstrong number</h2>
<form method="post">
    Enter positive integer: <input type="number" name="number">
    <input type="submit" name="submit">
</form>

<?php
function getArmstrong($num)
{
    $sum = 0;
    $totalDigits = strlen($num);
    while ($num > 0) {
        $digit = (int) ($num % 10);
        $sum = $sum + pow($digit, $totalDigits);
        $num = (int) ($num / 10);
    }
    return $sum;
}
if (isset($_POST["submit"])) {
    $num = $_POST["number"];
    if (empty($num))
        echo "<p>Please Enter a number</p>";
    else if ($num <= 0)
        echo "<p>Number must be positive and greater than 0</p>";
    else {
        if ($num != getArmstrong($num))
            echo "<p>$num is not armstrong</p>";
        else {
            echo "<p>$num is armstrong number</p><br><h2>Armstrong numbers from 1 to $num</h2><br>";
            for ($i = 1; $i <= $num; $i++)
                if ($i == getArmstrong($i))
                    echo "$i  ";
        }
    }
}
?>
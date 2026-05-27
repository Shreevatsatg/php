<form method="post">
    Enter distance 1 <br>
    feet: <input type="number" name="d1_feet" required><br>
    inches: <input type="number" name="d1_inches" required><br><br>
    Enter distance 2 <br>
    feet: <input type="number" name="d2_feet" required><br>
    inches: <input type="number" name="d2_inches" required><br><br>
    <input type="submit" name="action" value="Calculate">
</form>
<?php class Distance
{
    private $feet;
    private $inches;
    public function __construct($feet, $inches)
    {
        $this->feet = $feet;
        $this->inches = $inches;
    }
    public function add($other)
    {
        $totalInches = ($this->feet + $other->feet) * 12 + ($this->inches + $other->inches);
        return new Distance(intval($totalInches / 12), $totalInches % 12);
    }
    public function difference($other)
    {
        $totalInches1 = ($this->feet * 12) + $this->inches;
        $totalInches2 = ($other->feet * 12) + $other->inches;
        $diffInches = abs($totalInches1 - $totalInches2);
        return new Distance(intval($diffInches / 12), $diffInches % 12);
    }
    public function __toString()
    {
        return "{$this->feet} feet and {$this->inches} inches";
    }
}
if (isset($_POST["action"])) {
    $distance1 = new Distance($_POST['d1_feet'], $_POST['d1_inches']);
    $distance2 = new Distance($_POST['d2_feet'], $_POST['d2_inches']);
    $sum = $distance1->add($distance2);
    $diff = $distance1->difference($distance2);
    echo "Sum: $sum <br> Difference: $diff";
}
?>
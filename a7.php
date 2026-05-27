<h1>String Manipulation</h1>
<form method="post">
    Enter a string:<input type="text" name="data" required> <br><br>
    <button name="action" value="length">Get Length</button>
    <button name="action" value="uppercase">Convert to Uppercase</button>
    <button name="action" value="lowercase">Convert to Lowercase</button>
    <button name="action" value="reverse">Reverse String</button>
    <button name="action" value="palindrome">Check Palindrome</button>
    <button name="action" value="shuffle">Shuffle Characters</button>
    <button name="action" value="count">word count</button>
    <button name="action" value="replace">Replace Characters</button>
</form>
<?php
if (isset($_POST["action"])) {
    $data = $_POST["data"];
    switch ($_POST["action"]) {
        case "length":
            echo "String Length: " . strlen($data);
            break;
        case "uppercase":
            echo "Uppercase: " . strtoupper($data);
            break;
        case "lowercase":
            echo "Lowercase: " . strtolower($data);
            break;
        case "reverse":
            echo "Reversed: " . strrev($data);
            break;
        case "palindrome":
            $lower = strtolower($data);
            if ($lower == strrev($lower))
                echo "The string is a palindrome.";
            else
                echo "The string is not a palindrome.";
            break;
        case "shuffle":
            echo "Shuffled: " . str_shuffle($data);
            break;
        case "count":
            echo "Word Count: " . str_word_count($data);
            break;
        case "replace":
            echo "After replacing 'a' with 'X': " . str_replace("a", "X", $data);
            break;
    }
} ?>
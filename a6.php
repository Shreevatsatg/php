    <h1>Dictionary</h1><br> 
    <form method="POST"> 
        Enter a word: <input type="text" name="word"> 
        <input type="submit" name="submit"> 
    </form>     <?php     if (isset($_POST["submit"])) { 
        $dict = array( 
            "apple" => "it is a fruit", 
            "book" => "used to gain info", 
            "mobile" => "used to comunicate" 
        ); 
        $word = strtolower($_POST["word"]);         
        if (array_key_exists($word, $dict))             
            echo "<b>Meaning</b>: $dict[$word]";         
        else              
            echo "$word not found in dictionary"; 
    }     ?> 

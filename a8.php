<h1>Word Frequency Analyzer</h1> 
<form method="post"> 
    Enter a string:<input type="text" name="data" required> 
    <button name="action">Analyze</button> 
</form> 
<?php     
if (isset($_POST["action"])) { 
        $data = strtolower($_POST["data"]); 
        $words = str_word_count($data, 1); 
        $frequency = array_count_values($words); 
        echo "<h2>Word Frequencies:</h2>";         
        foreach ($frequency as $word => $count)              
        echo "$word: $count<br>"; 

        asort($frequency); 
        $asort_arr=json_encode($frequency);         
        echo "Least used word : ".key($frequency)." ".reset($frequency)." times used<br>"; 

        arsort($frequency); 
        $dsort_arr=json_encode($frequency); 
        echo "Most used word : ".key($frequency)." ".reset($frequency)." times used<br>"; 
        
        echo "<form method=post> 
        <button name=sort value=$asort_arr>Sort Ascending</button> 
        <button name=sort value=$dsort_arr>Sort Descending</button> 
        </form>"; 
    }     
    if(isset($_POST["sort"])) { 
        $s_arr = json_decode($_POST["sort"], true);         
        echo "<h2>Sorted Word Frequencies:</h2>";         
        foreach ($s_arr as $word => $count)              
            echo "$word: $count<br>"; 
    } 
    ?> 

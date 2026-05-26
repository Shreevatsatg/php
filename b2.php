<form method="POST"> 
    Enter number of rows: <input type="number" name="rows" required><br><br>     Enter number of columns: <input type="number" name="cols" required><br><br> 
    <input type="submit" name="generate" value="Generate Matrices"> 
</form> <?php     if (isset($_POST["generate"])) { 
        $rows = $_POST["rows"]; 
        $cols = $_POST["cols"]; 
 
        echo "<form method=post>  
                <input type=hidden name=rows value=$rows> 
                <input type=hidden name=cols value=$cols> 
                <h3>Matrix1</h3>                 <table border=1>"; 
                    for ($i = 1; $i <= $rows; $i++) {                         
                        echo "<tr>";                         
                        for ($j = 1; $j <= $cols; $j++)                              
                            echo "<td><input type=number name=a$i$j required></td>"; 
                        echo "</tr>"; 
                    }         echo "</table><br>               <h3>Matrix2</h3>               <table border=1>";                     
                    for ($i = 1; $i <= $rows; $i++) {                    
                        echo "<tr>"; 
                      for ($j = 1; $j <= $cols; $j++) {                            
                         echo "<td><input type=number name=b$i$j required></td>";                         
                         } 
                        echo "</tr>"; 
                    }         
                    echo "</table> 
              <input type=submit name=action value=sum>               <input type=submit name=action value=product><br><br> 
              </form>"; 
} if (isset($_POST["action"])) {     $rows = $_POST["rows"];     $cols = $_POST["cols"];    
 switch ($_POST["action"]) {         
    case "sum":  
                    echo "<h3>Sum of Matrices</h3>                           <table border='1'>";                                 
                    for ($i = 1; $i <= $rows; $i++) {                                     
                        echo "<tr>";                                     
                        for ($j = 1; $j <= $cols; $j++) { 
                                        $sum = $_POST["a$i$j"] + $_POST["b$i$j"];                                         
                                        echo "<td>$sum</td>"; 
                                    } 
                                    echo "</tr>"; 
                                }                     
                                echo "</table>";                     
                                break;         
                                case "product":  
                    if($rows != $cols) { 
                        echo "Matrix multiplication is not possible for nonsquare matrices."; 
                        break;                     
                        }                     
                        else {                         
                            echo "<h3>Product of Matrices</h3><table border='1'>";                         
                            for ($i = 1; $i <= $rows; $i++) {                             
                                echo "<tr>"; 
                            for ($j = 1; $j <= $cols; $j++) { 
                                $result = 0;                                 
                                for ($k = 1; $k <= $cols; $k++)                                      
                                    $result += $_POST["a$i$k"] * $_POST["b$k$j"];                                 
                                echo "<td>$result</td>"; 
                            }                             
                            echo "</tr>";                        
                            }                        
                            echo "</table>"; 
                    } 
    } } 

<!DOCTYPE html>  
<html>  
<body>  
<?php  
$a = array(  
            array(1, 2, 3),  
            array(4, 5, 6),  
            array(7, 8, 9)  
          );  
    
$b = array( 
            array(1, 2, 3),  
            array(4, 5, 6),  
            array(7, 8, 9)  
            
           );  
   
$rows = count($a);  
$cols = count($a[0]);  
   
$sum = array_fill(0, $cols, array_fill(0, $rows, 0));  
   
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
        $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];  
    }  
}  
   
print("Addition of two matrices: <br>");  
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
       print($sum[$i][$j] . " ");  
    }  
    print("<br>");  
}    
?>  
</body>  
</html>  
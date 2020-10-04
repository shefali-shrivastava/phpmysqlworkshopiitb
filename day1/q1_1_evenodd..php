<!-- Create a page evenodd.php into root directory of your local web server. Here, write a script for
finding out whether it is an odd number or even number and echo on the screen. The following
numbers set can be taken as input: 11, 23, 72 and 44. -->
<html>
<?php
$nos=array(11,23,72,44);
$x = 0;

 while($x < 4){

 if($nos[$x] % 2 == 0){ 
        echo "The number ".$nos[$x]." is an Even Number<br>";  
    } 
else{ 
        echo "The number ".$nos[$x]." is an Odd Numbers <br>"; 
    }

  $x++;
}
?>
</html>
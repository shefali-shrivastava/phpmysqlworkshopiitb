<!-- Write a PHP Script to declare 2 variables with specific numeric value of your choice and find out
the greater number between the two. If the numbers are equal, the respective message must
appear on the screen. -->

<html>
<?php
$a=30;
$b=20;
if($a > $b)
	echo $a." is greater than".$b;
elseif ($a < $b) 
	echo $b." is greater than".$a;
else
	echo $a." is equal to".$b;
		
?>
</html>
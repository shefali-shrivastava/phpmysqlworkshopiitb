<!-- Declare a function named writeName2 with a parameter $firstname and define it by echoing out:
$firstname." Sharma". Now call the function to retrieve the following output:
My name is Jai Sharma
My brother's name is Ram Sharma
Note: Use writeName2 function to write the names on screen. -->
<html>
<?php
function writeName2($firstname){
  echo  "$firstname Sharma";
}

echo"My name is ";writeName2("Jai");
echo"<br>My brother's name is ";writeName2("Ram");

?>
</html>
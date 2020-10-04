<!-- Declare an array week and assign the value of the days to each index number in the order of
occurrence and echo the result on the screen. -->
<html>
<?php
$week= array("1" => "monday","2"=>"tuesday","3"=>"wednesday","4"=>"thursday","5"=>"friday","6"=>"saturday","7"=>"sunday");

foreach($week as $x => $x_value) {
  echo "day" . $x . " is " . $x_value;
  echo "<br>";
}

?>
</html>
<!-- Create a page vowel.php into root directory of your local web server. Write in the script for
determining whether or not the character associated with a variable is Vowel or a Consonant. If its
a Vowel echo out the name of the vowel otherwise echo out its a Consonant. Use Switch for this
script. -->
<html>
<?php
$var="shefali";
$x=0;
while($x<strlen($var)){
switch($var[$x]){
 case 'a':
 case 'e':
 case 'i':
 case 'o':
 case 'u':
  echo  $var[$x]."  is a vowel<br>";
  break;
  exit();
 default:
  echo $var[$x]."   is a consonant<br>";

}
$x++;
}

?>
</html>
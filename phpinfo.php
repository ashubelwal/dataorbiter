<?php
$str = "geeks"; 
echo substr($str, 0,1);      
// Or we can write ltrim($str, $str[0]); 
$str = ltrim($str, 'g'); 

echo "<br/>".$str; 
echo "bingo";
?>
 


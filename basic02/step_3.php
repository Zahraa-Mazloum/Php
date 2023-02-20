<?php 
$var1 = 32;
$var2 = 45;
echo "var1 = $var1 and var2= $var2\n";
$var3=$var1;
$var1=$var2;
$var2=$var3;
echo "after swapping var1 = $var1 and var2=$var2"

?>
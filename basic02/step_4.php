<?php
function armstrong($num){
    $sum = 0; 
    $x = $num; 
    while($x != 0) 
    { 
        $remain = $x % 10; 
        $sum = $sum + $remain*$remain*$remain; 
        $x = $x / 10; 
    }    if ($num == $sum){
    echo "$num is armstrong";}
    else 

 echo "$num is not armstrong";

}
armstrong(1253)

?>
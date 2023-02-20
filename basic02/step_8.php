<?php 
function power($num){
    if($num>0 && $num%2==0){
        return "$num is power of 2"; 
    }
    else{
        return "$num isn't power of 2"; 
    }
}
echo power(5)
?>
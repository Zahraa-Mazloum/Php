<?php 
function check($word){
    if ($word===strrev($word)){
        echo "$word is palindrome";
    }
else         echo "$word is not palindrome";

}
check("php") ;

?>

<?php 
function replace($word){
    $newword=str_replace("Python", "PHP", $word);
    $new_word=str_replace("PHP", "Python", $word);
    echo $newword ."\n";
    echo $new_word;

}
replace("Python");

?>
<?php

function count_word($text, $search_word) {
  $words = explode(" ", $text);
    $count = 0;
  $i = 0;
  
  while ($i < count($words)) {
    if ($words[$i] == $search_word) {
      $count++;
    }
    $i++;
  }
  
  return $count;
}

$text = "hey , I am using php . php is sucks";
$search_word = "php";
$word_count = count_word($text, $search_word);
echo "$search_word appears $word_count time"


?>

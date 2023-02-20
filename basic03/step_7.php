<?php
function rev($sentence){
$reversed = "";
for ($i = strlen($sentence)- 1; $i >= 0; $i--) {
  $reversed .= $sentence[$i];
}
echo $reversed;

}
rev("php java")
?>

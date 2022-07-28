<h2>Check no. of character appeared in a string</h2>
<?php
function checkCharacter($name,$char){
  $count = 0;
 for ($i=0; $i < strlen($name); $i++) {
   $chr = $name[$i];
   if ($chr == $char) {
     $count++;
   }
 }
 echo $char.' appeared '.$count.' times';
}

$name= 'Anirudh singh';
$char = 'n';
checkCharacter($name,$char);
  ?>

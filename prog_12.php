<h2>Write a PHP function to convert all null values to blank?</h2>

<?php
function convertNullToBlank($array){
foreach ($array as $key => $value)
 {
  if (is_null($value))
   {
    $array[$key] = "";
   }
}
return $array;
}
 ?>

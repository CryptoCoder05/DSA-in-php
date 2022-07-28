<h2>Find no. of character appeared in a string in the key and value paird.</h2>
<?php
$input = 'Anirudh Singh';
$result = array();
for($i = 0; $i < strlen($input); $i++ ) {
  $chr = $input[$i];
  if( $chr === ' ' ) {
    $chr = '_';
  }

  if (isset($result[$chr])) {
    $result[$chr]++;
  }else {
    $result[$chr] = 1;
  }
}

var_dump($result);

 ?>

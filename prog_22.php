<h2>Practice array</h2>

<?php
$arr1 = [2,4,7,8,5];
$arr2 = [6,3,0,3,1];
$arr3 = [9,9];
$res = [];

for ($i=0; $i < count($arr1) ; $i++) {
  $res[] = $arr1[$i];
  $res[] = $arr2[$i];
}

array_splice($res,0,0,$arr3[0]);
array_splice($res,count($res),0,$arr3[1]);

var_dump($res);

$output = [9,2,6,4,3,7,0,8,3,5,1,9]
 ?>

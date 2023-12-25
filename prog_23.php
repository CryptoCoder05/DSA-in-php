<?php
// Add two element to get target.
$arr1 = [ 2,7,11,13,15];
$target = 9;
//Output : [0,1]

$arr2 = [3,2,4];
$target2 = 6;
//Output : [1,2]

function add_arr($tar,$arr){
   $res = [];
   foreach($arr as $ele){
     foreach($arr as $val){
       if($ele + $val == $tar){
         $res[] = $ele;
         $res[] = $val;
       }
     }
   }
   var_dump($res);
}

add_arr($target2,$arr2);
?>

<h2>Write a program in Php to check whether a number is prime or not?</h2>

<?php
function primeCheck($num){
  if($num == 1){
    return 0;
  }

  for ($i=2; $i <= $num/2 ; $i++) {
    if ($num % $i == 0) {
      return 0;
    }
  }
  return 1;
}

$flag = primeCheck(17);

if ($flag == 1) {
  echo "Prime";
}else {
  echo "Not Prime";
}
 ?>

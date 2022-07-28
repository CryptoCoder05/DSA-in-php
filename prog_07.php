<h2>Write a program to find the factorial of a number in PHP?</h2>

<?php

function Factorial($number){
    if($number <= 1){
        return 1;
    }
    else{
        return $number * Factorial($number - 1);
    }
}

$number = 5;
$fact = Factorial($number);
echo "Factorial = $fact";
?>

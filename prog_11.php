<h2>Write a program in PHP to reverse a number?</h2>

<?php
$num = 79658;
$revnum = 0;
while ($num > 1)
{
$rem = $num % 10;
$revnum = ($revnum * 10) + $rem;
$num = ($num / 10);
}

echo "Reverse number of 79658 is: $revnum";

?>  

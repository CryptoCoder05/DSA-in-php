<h2>Write a program in PHP to find the occurrence of a word in a string?</h2>

<?php

$s1 = "interviewmocks.com is a interview prep site";

$s2 = "interview";

$res = substr_count($s1, $s2);

echo($res);

?>

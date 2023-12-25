<h2>Valid Anagram</h2>
<pre>
Given two strings s and t, return true if t is an anagram of s, and false otherwise.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

 

Example 1:

Input: s = "anagram", t = "nagaram"
Output: true
Example 2:

Input: s = "rat", t = "car"
Output: false

----------------------------------
           Solution
----------------------------------
function isAnagram($str1,$str2) {
    if(strlen($str1) !== strlen($str2) ){
        return false;
    }

    $str1_array = str_split($str1);
    $array1 = [];
    foreach($str1_array as $char){
        if(isset($array1[$char])){
            $array1[$char]++;
        }else{
            $array1[$char] = 1;
        }
    }

    $str2_array = str_split($str2);
    $array2 = [];
    foreach($str2_array as $char){
        if(isset($array2[$char])){
            $array2[$char]++;
        }else{
            $array2[$char] = 1;
        }
    }
    
    return $array1 == $array2;
    
}

$s = "rat";
$t = "cat";

$result = isAnagram($s,$t);

echo $result ? "true":"false";

----------------------------------
           Output
----------------------------------
</pre>
<?php

function isAnagram($str1,$str2) {
    if(strlen($str1) !== strlen($str2) ){
        return false;
    }

    $str1_array = str_split($str1);
    $array1 = [];
    foreach($str1_array as $char){
        if(isset($array1[$char])){
            $array1[$char]++;
        }else{
            $array1[$char] = 1;
        }
    }

    $str2_array = str_split($str2);
    $array2 = [];
    foreach($str2_array as $char){
        if(isset($array2[$char])){
            $array2[$char]++;
        }else{
            $array2[$char] = 1;
        }
    }

    return $array1 == $array2;

}

$s = "rat";
$t = "cat";

$result = isAnagram($s,$t);

echo $result ? "true":"false";
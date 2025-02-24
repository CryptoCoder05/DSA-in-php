<h2>Group Anagrams</h2>

<pre>
Given an array of strings strs, group the anagrams together. You can return the answer in any order.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

 

Example 1:

Input: strs = ["eat","tea","tan","ate","nat","bat"]
Output: [["bat"],["nat","tan"],["ate","eat","tea"]]
Example 2:

Input: strs = [""]
Output: [[""]]
Example 3:

Input: strs = ["a"]
Output: [["a"]]

----------------------------------
           Solution
----------------------------------
function groupAnagrams($a) {
    $res = [];
    $visited = []; // To keep track of visited strings
    foreach ($a as $str) {
        if (!isset($visited[$str])) {
            $anagram = [];
            $anagram[] = $str; // Start a new anagram group
            $visited[$str] = true;

            foreach ($a as $next) {
                if ($str !== $next && checkAnagram($str, $next) && !isset($visited[$next])) {
                    $anagram[] = $next; // Add anagrams to the group
                    $visited[$next] = true;
                }
            }
            $res[] = $anagram; // Add the completed anagram group
        }
    }
    return $res;
}

function checkAnagram($s, $t) {
    if (strlen($s) == strlen($t)) {
        $sArray = count_chars($s, 1);
        $tArray = count_chars($t, 1);
        return $sArray == $tArray;
    }

    return false;
}

$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
$result = groupAnagrams($strs);

echo "<pre>";
print_r($result);
echo "</pre>";
----------------------------------
           Output
----------------------------------
</pre>

<?php

function groupAnagrams($a) {
    $res = [];
    $visited = []; // To keep track of visited strings
    foreach ($a as $str) {
        if (!isset($visited[$str])) {
            $anagram = [];
            $anagram[] = $str; // Start a new anagram group
            $visited[$str] = true;

            foreach ($a as $next) {
                if ($str !== $next && checkAnagram($str, $next) && !isset($visited[$next])) {
                    $anagram[] = $next; // Add anagrams to the group
                    $visited[$next] = true;
                }
            }
            $res[] = $anagram; // Add the completed anagram group
        }
    }
    return $res;
}

function checkAnagram($s, $t) {
    if (strlen($s) == strlen($t)) {
        $sArray = count_chars($s, 1);
        $tArray = count_chars($t, 1);
        return $sArray == $tArray;
    }

    return false;
}

$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
$result = groupAnagrams($strs);

echo "<pre>";
print_r($result);
echo "</pre>";
?>

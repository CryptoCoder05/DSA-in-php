<h2>Top K Frequent Elements</h2>

<pre>
Given an integer array nums and an integer k, return the k most frequent elements. You may return the answer in any order.

 

Example 1:

Input: nums = [1,1,1,2,2,3], k = 2
Output: [1,2]
Example 2:

Input: nums = [1], k = 1
Output: [1]

----------------------------------
           Solution
----------------------------------
function topK( $nums, $k) {
    $array = [];
    foreach( $nums as $key => $val) {
        if(isset($array[$val])){
            $array[$val]++; 
        }else{
            $array[$val]  = 1; 
        }
    }

    ksort($array);

    $res = array_slice($array, 0, $k, true);

    return array_keys($res);
}

$nums = [1,1,1,2,2,3];
$k = 2;

$result = topK($nums, $k);

echo "<pre>";
print_r($result);
echo "</pre>";

----------------------------------
           Output
----------------------------------
</pre>

<?php

function topK( $nums, $k) {
    $array = [];
    foreach( $nums as $key => $val) {
        if(isset($array[$val])){
            $array[$val]++; 
        }else{
            $array[$val]  = 1; 
        }
    }

    ksort($array);

    $res = array_slice($array, 0, $k, true);

    return array_keys($res);
}

$nums = [1,1,1,2,2,3];
$k = 2;

$result = topK($nums, $k);

echo "<pre>";
print_r($result);
echo "</pre>";
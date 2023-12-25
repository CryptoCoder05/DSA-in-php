<h2>Contains Duplicate
</h2>

<pre>
Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

 

Example 1:

Input: nums = [1,2,3,1]
Output: true
Example 2:

Input: nums = [1,2,3,4]
Output: false
Example 3:

Input: nums = [1,1,1,3,3,4,3,2,4,2]
Output: true

----------------------------------
           Solution
----------------------------------
function containsDublicate($nums){
    for ( $i=0; $i < count($nums); $i++ ) {
        for ( $j=1; $j < count($nums); $j++){
            if ( $nums[$i] == $nums[$j]){
                echo "true";
                return true;
            }
        }
        echo "false";
        return false;
    }
}

$nums = [1,2,3,1];
containsDublicate($nums);

----------------------------------
           Output
----------------------------------
</pre>
<?php

function containsDublicate($nums){
    for ( $i=0; $i < count($nums); $i++ ) {
        for ( $j=1; $j < count($nums); $j++){
            if ( $nums[$i] == $nums[$j]){
                echo "true";
                return true;
            }
        }
        echo "false";
        return false;
    }
}

$nums = [1,2,3,1];
containsDublicate($nums);





 ?>

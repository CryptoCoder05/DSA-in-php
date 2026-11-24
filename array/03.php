<?php
require_once __DIR__ . '/../config.php';
include ROOT_PATH . 'partials/header.php';
?>

<div class="container mb-5 mt-3">

    <h2>Top K Frequent Elements</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="<?= BASE_URL ?>basics/01.php" class="btn btn-info">Back</a>
        <a href="<?= BASE_URL ?>basics/04.php" class="btn btn-info">Next</a>
    </div>

    <!-- PHP Code -->
    <div class="mt-3">
        <pre><code class="language-php">&lt;?php

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


?&gt;</code></pre>
    </div>

    <!-- Output -->
    <h2 class="mt-4">Output</h2>

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


    ?>

</div>

<?php include ROOT_PATH . 'partials/footer.php'; ?>

<?php


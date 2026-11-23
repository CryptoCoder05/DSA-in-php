<?php
require_once __DIR__ . '/../config.php';
include ROOT_PATH . 'partials/header.php';
?>

<div class="container mb-5 mt-3">

    <h2>Contains Duplicate</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="<?= BASE_URL ?>array/01.php" class="btn btn-info">Back</a>
        <a href="<?= BASE_URL ?>array/03.php" class="btn btn-info">Next</a>
    </div>

    <!-- PHP Code -->
    <div class="mt-3">

        <pre><code class="language-php">&lt;?php

            Given an integer array nums, return true if any value appears at least twice in the array, 
            and return false if every element is distinct.

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

        ?&gt;</code></pre>

    </div>

    <!-- Output -->
    <h2 class="mt-4">Output</h2>

    <?php
    function containsDublicate($nums)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = 1; $j < count($nums); $j++) {
                if ($nums[$i] == $nums[$j]) {
                    echo "true";
                    return true;
                }
            }
            echo "false";
            return false;
        }
    }

    $nums = [1, 2, 3, 1];
    containsDublicate($nums);

    ?>

</div>

<?php include ROOT_PATH . 'partials/footer.php'; ?>
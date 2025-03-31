<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Two Sum</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/sum-target/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/sum-target/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
    You may assume that each input would have exactly one solution, and you may not use the same element twice.
    You can return the answer in any order.
    
    &lt;?php
    
    function twoSum($nums, $target)
    {
        $map = []; // HashMap to store value => index mapping
    
        foreach ($nums as $index => $num) {
            $complement = $target - $num;

            // Check if complement exists in map
            if (isset($map[$complement])) {
                return [$map[$complement], $index]; // Return indices
            }

            // Store the number in map
            $map[$num] = $index;
        }

        return []; // No valid pair found (should not happen as per problem statement)
    }

    // Example usage
    $nums = [2, 7, 11, 15];
    $target = 9;
    $result = twoSum($nums, $target);
    print_r($result); 

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    function twoSum($nums, $target)
    {
        $map = []; // HashMap to store value => index mapping
    
        foreach ($nums as $index => $num) {
            $complement = $target - $num;

            // Check if complement exists in map
            if (isset($map[$complement])) {
                return [$map[$complement], $index]; // Return indices
            }

            // Store the number in map
            $map[$num] = $index;
        }

        return []; // No valid pair found (should not happen as per problem statement)
    }

    // Example usage
    $nums = [2, 7, 11, 15];
    $target = 9;
    $result = twoSum($nums, $target);

    echo "<pre>";
    print_r($result); 
    echo "</pre>";
    ?>



    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
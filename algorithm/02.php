<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Maximum subarray sum - Kadane's Algorithm</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/algorithm/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/algorithm/03.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
   
    function maxSubArraySum($arr){
        $n = count($arr);
        $maxSum = PHP_INT_MIN;
        $sum = 0;
        $start = $end = $tempStart = 0;
        
        for($i = 0; $i < $n; $i++){
            $sum += $arr[$i];
            
            if ($sum > $maxSum) {
                $maxSum = $sum;
                $start = $tempStart;
                $end = $i;
            }
            
            if($sum < 0){
                $sum = 0;
                $tempStart = $i + 1;
            }
        }
        
        echo "Maximum subarray sum is: " . $maxSum;
        echo "\n";
        echo "Subarray: [" . implode(", ", array_slice($arr, $start, $end - $start + 1)) . "]";
    }

    $arr = [-2,-3,4,-1,-2,1,5,-3];
    maxSubArraySum($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function maxSubArraySum($arr)
    {
        $n = count($arr);
        $maxSum = PHP_INT_MIN;
        $sum = 0;
        $start = $end = $tempStart = 0;

        for ($i = 0; $i < $n; $i++) {
            $sum += $arr[$i];

            if ($sum > $maxSum) {
                $maxSum = $sum;
                $start = $tempStart;
                $end = $i;
            }

            if ($sum < 0) {
                $sum = 0;
                $tempStart = $i + 1;
            }
        }

        echo "Maximum subarray sum is: " . $maxSum;
        echo "<br>";
        echo "Subarray: [" . implode(", ", array_slice($arr, $start, $end - $start + 1)) . "]";
    }

    $arr = [-2, -3, 4, -1, -2, 1, 5, -3];
    maxSubArraySum($arr);

    ?>



    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>
<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Binary Search Algorithm : O(log n)</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    function binarySearch($arr, $target)
    {

        $start = 0;
        $end = count($arr) - 1;

        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            // $mid = (int) ($start + ($end - $start) / 2); // for optimal case 

            if ($target < $arr[$mid]) {
                $end = $mid - 1;
            } else if ($target > $arr[$mid]) {
                $start = $mid + 1;
            } else {
                return $mid; // Target found
            }
        }

        return -1; // Target not found
    }

    $arr = [2, 3, 5, 6, 8, 9, 10];
    $target = 9;

    echo "Target fount at index : ". binarySearch($arr, $target);
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function binarySearch($arr, $target)
    {

        $start = 0;
        $end = count($arr) - 1;

        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            // $mid = (int) ($start + ($end - $start) / 2); // for optimal case 

            if ($target < $arr[$mid]) {
                $end = $mid - 1;
            } else if ($target > $arr[$mid]) {
                $start = $mid + 1;
            } else {
                return $mid; // Target found
            }
        }

        return -1; // Target not found
    }

    $arr = [2, 3, 5, 6, 8, 9, 10];
    $target = 9;

    echo "Target fount at index : ". binarySearch($arr, $target);

    ?>



    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>
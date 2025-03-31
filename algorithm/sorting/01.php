<?php 
include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); 
?>

<div class="container mb-5 mt-3">
    <h2>Bubble Sort Algorithm : O(n2)</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/algorithm/sorting/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/algorithm/sorting/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    function bubbleSort($arr)
    {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            $swapped = false;

            // Last i elements are already in place
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $swapped = true;
                }
            }

            // If no elements were swapped, array is sorted
            if (!$swapped) {
                break;
            }
        }

        return $arr;
    }

    // Example usage
    $arr = [2, 1, 5, 3, 8, 9];
    print_r(bubbleSort($arr));
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function bubbleSort($arr)
    {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            $swapped = false;

            // Last i elements are already in place
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $swapped = true;
                }
            }

            // If no elements were swapped, array is sorted
            if (!$swapped) {
                break;
            }
        }

        return $arr;
    }

    // Example usage
    $arr = [2, 1, 5, 3, 8, 9];

    echo "<pre>";
    print_r(bubbleSort($arr));
    echo "</pre>";
    ?>



    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
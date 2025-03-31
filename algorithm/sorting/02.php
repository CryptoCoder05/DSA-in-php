<?php
include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php');
?>

<div class="container mb-5 mt-3">
    <h2>Merge Sort Algorithm -> TC : O(n log n) | SC : O(n)</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/algorithm/sorting/02.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/algorithm/sorting/03.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    
    function merge(&$arr, $st, $mid, $end) {
        $temp = [];
        $i = $st;
        $j = $mid + 1;

        while ($i <= $mid && $j <= $end) {
            if ($arr[$i] <= $arr[$j]) {
                $temp[] = $arr[$i++];
            } else {
                $temp[] = $arr[$j++];
            }
        }

        while ($i <= $mid) {
            $temp[] = $arr[$i++];
        }

        while ($j <= $end) {
            $temp[] = $arr[$j++];
        }

        // Copy sorted elements back to original array
        foreach ($temp as $idx => $val) {
            $arr[$st + $idx] = $val;
        }
    }

    function mergeSort(&$arr, $st, $end) {
        if ($st < $end) {
            $mid = (int)(($st + $end) / 2);

            mergeSort($arr, $st, $mid);
            mergeSort($arr, $mid + 1, $end);

            merge($arr, $st, $mid, $end);
        }
    }

    $arr = [2, 5, 6, 4, 5];
    $n = count($arr);
    mergeSort($arr, 0, $n - 1);

    print_r($arr);
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function merge(&$arr, $st, $mid, $end)
    {
        $temp = [];
        $i = $st;
        $j = $mid + 1;

        while ($i <= $mid && $j <= $end) {
            if ($arr[$i] <= $arr[$j]) {
                $temp[] = $arr[$i++];
            } else {
                $temp[] = $arr[$j++];
            }
        }

        while ($i <= $mid) {
            $temp[] = $arr[$i++];
        }

        while ($j <= $end) {
            $temp[] = $arr[$j++];
        }

        // Copy sorted elements back to original array
        foreach ($temp as $idx => $val) {
            $arr[$st + $idx] = $val;
        }
    }

    function mergeSort(&$arr, $st, $end)
    {
        if ($st < $end) {
            $mid = (int) (($st + $end) / 2);

            mergeSort($arr, $st, $mid);
            mergeSort($arr, $mid + 1, $end);

            merge($arr, $st, $mid, $end);
        }
    }

    $arr = [2, 5, 6, 4, 5];
    $n = count($arr);
    mergeSort($arr, 0, $n - 1);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    ?>




    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
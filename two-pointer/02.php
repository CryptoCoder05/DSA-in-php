<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Union of two arrays.</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/03.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    function union($arr1, $arr2)
    {
        $i = 0;
        $j = 0;
        $n = count($arr1);
        $m = count($arr2);
        $union = [];

        while ($i < $n && $j < $m) {
            // Skip duplicate elements in arr1
            if ($i > 0 && $arr1[$i] == $arr1[$i - 1]) {
                $i++;
                continue;
            }
            // Skip duplicate elements in arr2
            if ($j > 0 && $arr2[$j] == $arr2[$j - 1]) {
                $j++;
                continue;
            }

            if ($arr1[$i] < $arr2[$j]) {
                $union[] = $arr1[$i++];
            } elseif ($arr1[$i] > $arr2[$j]) {
                $union[] = $arr2[$j++];
            } else {
                // If both elements are equal, add one and move both pointers
                $union[] = $arr1[$i++];
                $j++;
            }
        }

        // Add remaining elements from arr1
        while ($i < $n) {
            if ($i == 0 || $arr1[$i] != $arr1[$i - 1]) {
                $union[] = $arr1[$i];
            }
            $i++;
        }

        // Add remaining elements from arr2
        while ($j < $m) {
            if ($j == 0 || $arr2[$j] != $arr2[$j - 1]) {
                $union[] = $arr2[$j];
            }
            $j++;
        }

        return $union;
    }

    $arr1 = [1, 1, 2, 3, 4, 5];
    $arr2 = [2, 3, 4, 4, 5, 6];

    print_r(union($arr1, $arr2));
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function union($arr1, $arr2)
    {
        $i = 0;
        $j = 0;
        $n = count($arr1);
        $m = count($arr2);
        $union = [];

        while ($i < $n && $j < $m) {
            // Skip duplicate elements in arr1
            if ($i > 0 && $arr1[$i] == $arr1[$i - 1]) {
                $i++;
                continue;
            }
            // Skip duplicate elements in arr2
            if ($j > 0 && $arr2[$j] == $arr2[$j - 1]) {
                $j++;
                continue;
            }

            if ($arr1[$i] < $arr2[$j]) {
                $union[] = $arr1[$i++];
            } elseif ($arr1[$i] > $arr2[$j]) {
                $union[] = $arr2[$j++];
            } else {
                // If both elements are equal, add one and move both pointers
                $union[] = $arr1[$i++];
                $j++;
            }
        }

        // Add remaining elements from arr1
        while ($i < $n) {
            if ($i == 0 || $arr1[$i] != $arr1[$i - 1]) {
                $union[] = $arr1[$i];
            }
            $i++;
        }

        // Add remaining elements from arr2
        while ($j < $m) {
            if ($j == 0 || $arr2[$j] != $arr2[$j - 1]) {
                $union[] = $arr2[$j];
            }
            $j++;
        }

        return $union;
    }

    $arr1 = [1, 1, 2, 3, 4, 5];
    $arr2 = [2, 3, 4, 4, 5, 6];

    echo "<pre>";
    print_r(union($arr1, $arr2));
    echo "</pre>";
    ?>



    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>
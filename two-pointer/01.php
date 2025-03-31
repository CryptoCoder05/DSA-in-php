<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Move all zeros to end of the array.</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/two-pointer/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/two-pointer/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    // Get zero index
    function zeroIndex($arr)
    {
        $j = -1;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == 0) {
                $j = $i;
                break;
            }
        }
        return $j;
    }

    function moveZeroToEnd($arr)
    {
        $n = count($arr);

        $j = zeroIndex($arr);

        // if zero not exits
        if ($j == -1) {
            return $arr;
        }

        for ($i = $j + 1; $i < $n; $i++) {
            if ($arr[$i] != 0) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
                $j++;
            }
        }

        return $arr;
    }

    $arr = [1, 0, 2, 3, 2, 0, 0, 4, 5, 1];

    print_r(moveZeroToEnd($arr));
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    // Get zero index
    function zeroIndex($arr)
    {
        $j = -1;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == 0) {
                $j = $i;
                break;
            }
        }
        return $j;
    }

    function moveZerosToEnd($arr)
    {
        $n = count($arr);

        $j = zeroIndex($arr);

        // if zero not exits
        if ($j == -1) {
            return $arr;
        }

        for ($i = $j + 1; $i < $n; $i++) {
            if ($arr[$i] != 0) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
                $j++;
            }
        }

        return $arr;
    }

    $arr = [1, 0, 2, 3, 2, 0, 0, 4, 5, 1];

    echo '<pre>';
    print_r(array_values(moveZerosToEnd($arr)));
    echo '</pre>';
    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>
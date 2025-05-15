<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Rotate array by K steps.</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/06.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/08.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    
    function reverse(&$arr, $i, $j)
    {
        while ($i < $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;

            $i++;
            $j--;
        }
    }

    // Remeber
    function rotate(&$arr, $k){
        $n = count($arr);
        $k = $k % $n;
        reverse($arr,0,$n-$k-1); 
        reverse($arr,$n-$k, $n-1);
        reverse($arr,0,$n-1);
    }

    $arr = [10,20,30,40,50,60];
    $k = 2;

    rotate($arr, $k);

    print_r($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    function reverse(&$arr, $i, $j)
    {
        while ($i < $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;

            $i++;
            $j--;
        }
    }

    function rotate(&$arr, $k)
    {
        $n = count($arr);
        $k = $k % $n;
        reverse($arr, 0, $n - $k - 1);
        reverse($arr, $n - $k, $n - 1);
        reverse($arr, 0, $n - 1);
    }

    $arr = [10, 20, 30, 40, 50, 60];
    $k = 2;

    rotate($arr, $k);

    ?>

    <pre>
    <?php print_r($arr); ?>
</pre>
</div>

<!-- ===================================== Code End =============================================-->

<?php include '../partials/footer.php'; ?>
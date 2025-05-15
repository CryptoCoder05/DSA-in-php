<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Reverse an array without creating extra array.</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/05.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/07.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    
    $arr = [10,20,30,40,50,60];
    $n = count($arr);
    $i = 0;
    $j = $n - 1;

    while($i < $j){
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
        
        $i++;
        $j--;
    }

    print_r($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    $arr = [10, 20, 30, 40, 50, 60];
    $n = count($arr);
    $i = 0;
    $j = $n - 1;

    while ($i < $j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;

        $i++;
        $j--;
    }

    print_r($arr);
    ?>
</div>
<!-- ===================================== Code End =============================================-->

<?php include '../partials/footer.php'; ?>
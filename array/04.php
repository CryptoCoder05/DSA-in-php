<?php include '../partials/header.php'; ?>

<div class="container mb-5">
    <h2>PHP Program to Find Second Largest Element</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/03.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/05.php" class="btn btn-info">Next</a>
    </div>

    <!-- ===================================== Pre Code =============================================-->

    <pre><code class="language-php">
    &lt;?php

    $arr = [20,30,1,-5,50,5];

    $largest = PHP_INT_MIN;
    $second_largest = PHP_INT_MIN;

    for($i = 0; $i < count($arr); $i++){
        if($largest < $arr[$i]){
            $largest = $arr[$i];
        }
    }

    for($i = 0; $i < count($arr); $i++){
        if($second_largest < $arr[$i] && $arr[$i] != $largest){
            $second_largest = $arr[$i];
        }
    }

    echo "Largest value is ". $largest;
    echo "Secondl largest value is ". $second_largest;

    ?&gt;
    </code></pre>

    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    $arr = [20, 30, 1, -5, 50, 5];

    $largest = PHP_INT_MIN;
    $second_largest = PHP_INT_MIN;

    for ($i = 0; $i < count($arr); $i++) {
        if ($largest < $arr[$i]) {
            $largest = $arr[$i];
        }
    }
    for ($i = 0; $i < count($arr); $i++) {
        if ($second_largest < $arr[$i] && $arr[$i] != $largest) {
            $second_largest = $arr[$i];
        }
    }

    echo "Largest value is " . $largest . "</br>";
    echo "Second largest value is " . $second_largest;
    ?>

    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>
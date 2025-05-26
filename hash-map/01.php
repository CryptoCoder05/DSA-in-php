<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Find the Majority Element in an Array</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/hash-map/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/hash-map/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

    function majorityElement($arr) {
        $n = count($arr);
        $m =floor( $n / 2);
        $set = [];
        
        for($i = 0; $i < $n; $i++) {
            if(isset($set[$arr[$i]])){
                $set[$arr[$i]]++;
            }else{
                $set[$arr[$i]] = 1;
            }
        }
        
        foreach($set as $key => $val){
            if($val > $m){
                return;
            }
        }
        
        echo "No majority element\n";
    }

    $arr = [2, 2, 3, 3, 1, 2, 2];
    majorityElement($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function majorityElement($arr)
    {
        $n = count($arr);
        $m = floor($n / 2);
        $set = [];

        for ($i = 0; $i < $n; $i++) {
            if (isset($set[$arr[$i]])) {
                $set[$arr[$i]]++;
            } else {
                $set[$arr[$i]] = 1;
            }
        }

        foreach ($set as $key => $val) {
            if ($val > $m) {
                echo $key;
                return;
            }
        }

        echo "No majority element\n";
    }

    $arr = [2, 2, 3, 3, 1, 2, 2];
    majorityElement($arr);

    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
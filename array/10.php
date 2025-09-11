<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Rearrange Array by Alternating Positive and Negative Numbers</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/09.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/11.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
  
    function reArrangeArray(array $arr) {
        $pos = $neg = [];
        
        // Separate positive and negative numbers
        foreach ($arr as $val) {
            ($val >= 0) ? $pos[] = $val : $neg[] = $val;
        }

        $res = [];
        $i = $j = 0;
        $lenPos = count($pos);
        $lenNeg = count($neg);

        // Alternate positives and negatives
        while ($i < $lenPos && $j < $lenNeg) {
            $res[] = $pos[$i];
            $res[] = $neg[$j];
            $i++;
            $j++;
        }

        // Append remaining values
        while ($i < $lenPos){
            $res[] = $pos[$i];
            $i++;
        } 
        while ($j < $lenNeg){
            $res[] = $neg[$j];
            $j++;
        }

        // Output
        print_r([
            'Positive'   => $pos,
            'Negative'   => $neg,
            'Rearranged' => $res,
        ]);
}

// Test case
$arr = [-1, 2, 3, 4, -3, 1];
reArrangeArray($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function reArrangeArray(array $arr)
    {
        $pos = $neg = [];

        // Separate positive and negative numbers
        foreach ($arr as $val) {
            ($val >= 0) ? $pos[] = $val : $neg[] = $val;
        }

        $res = [];
        $i = $j = 0;
        $lenPos = count($pos);
        $lenNeg = count($neg);

        // Alternate positives and negatives
        while ($i < $lenPos && $j < $lenNeg) {
            $res[] = $pos[$i];
            $res[] = $neg[$j];
            $i++;
            $j++;
        }

        // Append remaining values
        while ($i < $lenPos) {
            $res[] = $pos[$i];
            $i++;
        }
        while ($j < $lenNeg) {
            $res[] = $neg[$j];
            $j++;
        }

        // Output
        echo "<pre>";
        print_r([
            'Positive' => $pos,
            'Negative' => $neg,
            'Rearranged' => $res,
        ]);
        echo "</pre>";
    }

    // Test case
    $arr = [-1, 2, 3, 4, -3, 1];
    reArrangeArray($arr);

    ?>
</div>


<!-- ===================================== Code End =============================================-->

<?php include '../partials/footer.php'; ?>
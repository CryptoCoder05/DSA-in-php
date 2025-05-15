<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Find Maximum Consecutive 1s in an Array</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/08.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/10.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
  
    function maxConNo(array $arr): void {
        $maxCount = 0;
        $currentCount = 0;

        foreach ($arr as $val) {
            if ($val === 1) {
                $currentCount++;
                if ($currentCount > $maxCount) {
                    $maxCount = $currentCount;
                }
            } else {
                $currentCount = 0;
            }
        }

        echo $maxCount;
    }

    $arr = [1, 1, 0, 1, 1, 1, 0, 1, 1];
    maxConNo($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function maxConNo(array $arr): void
    {
        $maxCount = 0;
        $currentCount = 0;

        foreach ($arr as $val) {
            if ($val === 1) {
                $currentCount++;
                if ($currentCount > $maxCount) {
                    $maxCount = $currentCount;
                }
            } else {
                $currentCount = 0;
            }
        }

        echo $maxCount;
    }

    $arr = [1, 1, 0, 1, 1, 1, 0, 1, 1];
    maxConNo($arr);
    ?>
</div>


<!-- ===================================== Code End =============================================-->

<?php include '../partials/footer.php'; ?>
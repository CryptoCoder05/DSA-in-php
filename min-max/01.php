<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Find Leaders in an Array</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/min-max/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/min-max/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

    function findLeaders($arr){
        $n = count($arr);
        $superiors = [];

        $maxRight = PHP_INT_MIN;

        for ($i = $n - 1; $i >= 0; $i--) {
            if ($arr[$i] > $maxRight) {
                $superiors[] = $arr[$i];
                $maxRight = $arr[$i];
            }
        }

        print_r($superiors);
    }

    $arr = [10,22,12,3,0,6];
    findLeaders($arr);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function findLeaders($arr)
    {
        $n = count($arr);
        $superiors = [];

        $maxRight = PHP_INT_MIN;

        for ($i = $n - 1; $i >= 0; $i--) {
            if ($arr[$i] > $maxRight) {
                $superiors[] = $arr[$i];
                $maxRight = $arr[$i];
            }
        }

        return $superiors;
    }

    $arr = [10, 22, 12, 3, 0, 6];
    $result = findLeaders($arr);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
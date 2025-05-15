<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Find single unique number</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/array/07.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/array/09.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    function singleNumber($arr){
        $n = count($arr);
        $ans = 0;
        
        for($i = 0; $i < $n; $i++){
            $ans ^= $arr[$i];
        }
        
        return $ans; 
    }

    $arr = [4,1,2,1,2];
    $result = singleNumber($arr);

    echo $result;
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    function singleNumber($arr)
    {
        $n = count($arr);
        $ans = 0;

        for ($i = 0; $i < $n; $i++) {
            $ans ^= $arr[$i];
        }

        return $ans;
    }

    $arr = [4, 1, 2, 1, 2];
    $result = singleNumber($arr);

    echo $result;
    ?>
</div>

<!-- ===================================== Code End =============================================-->

<?php include '../partials/footer.php'; ?>
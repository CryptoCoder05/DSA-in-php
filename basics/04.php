<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>PHP Program to generate Fibonacci series</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/basics/03.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/basics/05.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

        function Fibonacci($n){
            $num1 = 0;
            $num2 = 1;
            $counter = 0;
            while ($counter < $n){
                echo ' '.$num1;
                $num3 = $num2 + $num1;
                $num1 = $num2;
                $num2 = $num3;
                $counter = $counter + 1;
            }
        }

        $n = 10;
        Fibonacci($n);

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function Fibonacci($n)
    {
        $num1 = 0;
        $num2 = 1;
        $counter = 0;
        while ($counter < $n) {
            echo ' ' . $num1;
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
        }
    }

    $n = 10;
    Fibonacci($n);

    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
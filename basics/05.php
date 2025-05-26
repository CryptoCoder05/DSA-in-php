<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Write a program in Php to check whether a number is prime or not?</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/basics/04.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/basics/06.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

        function primeCheck($num){
            if($num == 1){
                return 0;
            }

            for ($i=2; $i <= $num/2 ; $i++) {
                if ($num % $i == 0) {
                    return 0;
                }
            }
            return 1;
        }

        $flag = primeCheck(17);

        if ($flag == 1) {
            echo "Prime";
        }else {
            echo "Not Prime";
        }

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function primeCheck($num)
    {
        if ($num == 1) {
            return 0;
        }

        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return 0;
            }
        }
        return 1;
    }

    $flag = primeCheck(17);

    if ($flag == 1) {
        echo "Prime";
    } else {
        echo "Not Prime";
    }
    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>
<?php
require_once __DIR__ . '/../config.php';
include ROOT_PATH . 'partials/header.php';
?>

<div class="container mb-5 mt-3">
    <h2>Write a program to find the factorial of a number in PHP</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="<?= BASE_URL ?>basics/01.php" class="btn btn-info">Back</a>
        <a href="<?= BASE_URL ?>basics/03.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

        function Factorial($number){
            if($number <= 1){
                return 1;
            }
            else{
                return $number * Factorial($number - 1);
            }
        }

        $number = 5;
        $fact = Factorial($number);
        echo "Factorial = $fact";

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    function Factorial($number)
    {
        if ($number <= 1) {
            return 1;
        } else {
            return $number * Factorial($number - 1);
        }
    }

    $number = 5;
    $fact = Factorial($number);
    echo "Factorial = $fact";
    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include ROOT_PATH . 'partials/footer.php'; ?>
<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Pyramid Pattern</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/patterns/05.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/patterns/07.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    Pattern - 1
    -------------------
    $n = 4;

    for ($i = 0; $i < $n; $i++) {
        // spaces
        for ($j = 0; $j < $n - $i - 1; $j++) {
            echo " ";
        }

        // num1
        for ($j = 0; $j <= $i; $j++) {
            echo $j + 1;
        }

        // num2
        for ($j = $i; $j > 0; $j--) {
            echo $j;
        }

        echo "\n";
    }
    
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->
    <div class="d-flex">
        <div class="me-3">
            <h2>Output</h2>

            <?php

            $n = 4;

            for ($i = 0; $i < $n; $i++) {
                // spaces
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    echo "&nbsp";
                }

                // num1
                for ($j = 0; $j <= $i; $j++) {
                    echo $j + 1;
                }

                // num2
                for ($j = $i; $j > 0; $j--) {
                    echo $j;
                }

                echo "<br>";
            }


            ?>

        </div>
    </div>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>
<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Floyd's Triangle Pattern</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/patterns/03.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/patterns/05.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    Pattern - 1
    -------------------
    $n = 4;
    $num = 1;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo $num++ . " ";
        }
        echo "\n";
    }
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->
    <div class="d-flex">
        <div class="me-3">
            <h2>Pattern-1 |</h2>

            <?php

            $n = 4;
            $num = 1;

            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $i + 1; $j++) {
                    echo $num++ . " ";
                }
                echo "</br>";
            }

            ?>

        </div>
    </div>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>